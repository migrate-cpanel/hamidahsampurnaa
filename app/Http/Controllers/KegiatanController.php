<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Models\KegiatanImage;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\KegiatanController;

class KegiatanController extends Controller
{
    // Menampilkan daftar kegiatan di halaman admin
    public function index()
    {
        $kegiatans = Kegiatan::with('images')->latest()->get();
        return view('kegiatan.index', compact('kegiatans'));
    }

    // Menampilkan form untuk membuat kegiatan baru
    public function create()
    {
        return view('kegiatan.create');
    }

    // Menyimpan data kegiatan baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'full_description' => 'required|string',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        $kegiatan = Kegiatan::create($request->only('title',  'full_description'));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imagefile) {
                $path = $imagefile->store('kegiatan_images', 'public');
                $kegiatan->images()->create([
                    'image_path' => basename($path),
                    'alt_text' => $kegiatan->title
                ]);
            }
        }

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan.');
    }


    public function show($id)
    {
        $kegiatan = Kegiatan::with('images')->findOrFail($id);
        return view('kegiatan.show', compact('kegiatan'));
    }

    // Menampilkan form untuk mengedit kegiatan
    public function edit($id)
    {
        $kegiatan = Kegiatan::with('images')->findOrFail($id);
        return view('kegiatan.edit', compact('kegiatan'));
    }

    // Mengupdate data kegiatan di database
    public function update(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'full_description' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        $kegiatan->update($request->only('title', 'full_description'));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imagefile) {
                $path = $imagefile->store('kegiatan_images', 'public');
                $kegiatan->images()->create([
                    'image_path' => basename($path),
                    'alt_text' => $kegiatan->title
                ]);
            }
        }

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    // Menghapus data kegiatan dari database
    public function destroy($id)
    {
        $kegiatan = Kegiatan::with('images')->findOrFail($id);
        
        // Hapus file gambar dari storage
        foreach ($kegiatan->images as $image) {
            Storage::disk('public')->delete('kegiatan_images/' . $image->image_path);
        }

        $kegiatan->delete(); // Ini akan menghapus gambar terkait karena onDelete('cascade')

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil dihapus.');
    }

    // Menghapus gambar individual dari sebuah kegiatan
    public function destroyImage($imageId)
    {
        $image = KegiatanImage::findOrFail($imageId);
        Storage::disk('public')->delete('kegiatan_images/' . $image->image_path);
        $image->delete();

        return back()->with('success', 'Gambar berhasil dihapus.');
    }
}