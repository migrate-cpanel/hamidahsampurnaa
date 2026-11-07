<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use App\Models\EkskulImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\EkskulController;


class EkskulController extends Controller
{
    /**
     * Menampilkan daftar semua ekskul di halaman admin.
     */
    public function index()
    {
        $ekskuls = Ekskul::with('images')->latest()->get();
        return view('ekskul.index', compact('ekskuls'));
    }

    /**
     * Menampilkan form untuk membuat ekskul baru.
     */
    public function create()
    {
        return view('ekskul.create');
    }

    /**
     * Menyimpan ekskul baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        $ekskul = Ekskul::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imagefile) {
                $path = $imagefile->store('ekskul_images', 'public');
                $ekskul->images()->create([
                    'image_path' => basename($path),
                    'alt_text' => $request->name,
                ]);
            }
        }

        return redirect()->route('ekskul.index')->with('add_sukses', 'Data ekstrakurikuler berhasil ditambahkan.');
    }

    public function show($id)
    {
        $ekskul = Ekskul::with('images')->findOrFail($id);
        return view('ekskul.show', compact('ekskul'));
    }

    /**
     * Menampilkan form untuk mengedit ekskul.
     */
    public function edit($id)
    {
        $ekskul = Ekskul::with('images')->findOrFail($id);
        return view('ekskul.edit', compact('ekskul'));
    }

    /**
     * Memperbarui data ekskul di database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        $ekskul = Ekskul::findOrFail($id);
        $ekskul->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imagefile) {
                $path = $imagefile->store('ekskul_images', 'public');
                $ekskul->images()->create([
                    'image_path' => basename($path),
                    'alt_text' => $request->name,
                ]);
            }
        }

        return redirect()->route('ekskul.index')->with('edit_sukses', 'Data ekstrakurikuler berhasil diperbarui.');
    }

    /**
     * Menghapus data ekskul dari database.
     */
    public function destroy($id)
    {
        $ekskul = Ekskul::with('images')->findOrFail($id);

        // Hapus file gambar dari storage
        foreach ($ekskul->images as $image) {
            Storage::disk('public')->delete('ekskul_images/' . $image->image_path);
        }

        $ekskul->delete();

        return redirect()->route('ekskul.index')->with('delete_sukses', 'Data ekstrakurikuler berhasil dihapus.');
    }

    /**
     * Menghapus satu gambar spesifik milik ekskul.
     */
    public function destroyImage($imageId)
    {
        $image = EkskulImage::findOrFail($imageId);
        Storage::disk('public')->delete('ekskul_images/' . $image->image_path);
        $image->delete();

        return back()->with('edit_sukses', 'Gambar berhasil dihapus.');
    }
}