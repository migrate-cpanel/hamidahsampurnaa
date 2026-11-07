<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\LogoController;
use App\Models\Logo; // Pastikan Anda sudah membuat Model Logo dengan `php artisan make:model Logo`

class LogoController extends Controller
{
    // Menampilkan semua logo (Read)
    public function index()
    {
        // Mengambil data urut dari yang terbaru
        $logos = Logo::latest()->get(); 
        return view('logos.index', compact('logos'));
    }

    // Menampilkan form tambah data (Create)
    public function create()
    {
        return view('logos.add');
    }

    // Menyimpan data baru (Create)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'height' => 'required|integer|min:10|max:200',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        // Upload gambar
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('logo_images', $imageName, 'public');

        Logo::create([
            'name' => $request->name,
            'height' => $request->height,
            'image' => $imageName,
        ]);

        return redirect()->route('logos.admin.index')->with('add_sukses', 'Logo berhasil ditambahkan.');
    }

    // Menampilkan form edit data (Update)
    public function edit($id)
    {
        $logo = Logo::findOrFail($id);
        return view('logos.edit', compact('logo'));
    }

    // Memperbarui data (Update)
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'height' => 'required|integer|min:10|max:200',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048', // Gambar tidak wajib diisi saat update
        ]);

        $logo = Logo::findOrFail($id);
        $imageName = $logo->image;

        // Jika ada gambar baru yang di-upload
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            Storage::disk('public')->delete('logo_images/' . $logo->image);

            // Upload gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('logo_images', $imageName, 'public');
        }

        $logo->update([
            'name' => $request->name,
            'height' => $request->height,
            'image' => $imageName,
        ]);

        return redirect()->route('logos.admin.index')->with('edit_sukses', 'Logo berhasil diperbarui.');
    }

    // Menghapus data (Delete)
    public function destroy($id)
    {
        $logo = Logo::findOrFail($id);
        
        // Hapus file gambar dari storage
        Storage::disk('public')->delete('logo_images/' . $logo->image);

        // Hapus data dari database
        $logo->delete();

        return redirect()->route('logos.admin.index')->with('delete_sukses', 'Logo berhasil dihapus.');
    }
}