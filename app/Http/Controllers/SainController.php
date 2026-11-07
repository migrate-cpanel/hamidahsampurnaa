<?php

namespace App\Http\Controllers;

use App\Models\Sain;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class SainController extends Controller
{
    // === FUNGSI UNTUK TAMPILAN PUBLIK ===

    /**
     * Menampilkan halaman daftar artikel Sains untuk pengunjung.
     */
    public function publicIndex()
    {
        // PASTIKAN BARIS INI SAMA PERSIS
        $sains = Sain::orderBy('published_date', 'desc') // Prioritas 1: Urutkan tanggal dari terbaru ke terlama
                    ->orderBy('created_at', 'desc')   // Prioritas 2: Jika tanggal sama, urutkan dari yang baru dibuat
                    ->paginate(9);

        return view('sains-dan-pengetahuan-modern', compact('sains'));
    }

    /**
     * Menampilkan halaman detail artikel Sains untuk pengunjung.
     */
    public function publicShow($slug)
    {
        $sain = Sain::where('slug', $slug)->firstOrFail();
        return view('contoh-sains', compact('sain'));
    }

    // === FUNGSI UNTUK PANEL ADMIN ===

    /**
     * Menampilkan daftar data di panel admin.
     */
    public function adminIndex()
    {
        $sains = Sain::latest()->get();
        return view('sains.index', compact('sains'));
    }

    /**
     * Menampilkan form untuk menambah data baru.
     */
    public function create()
    {
        return view('sains.add');
    }

    /**
     * Menyimpan data baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:300',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_date' => 'required|date',
        ]);

        // --- LOGIKA SLUG BARU DIMULAI DI SINI ---
        $baseSlug = Str::slug($request->title, '-');
        $slug = $baseSlug;
        $counter = 1;
        // Lakukan perulangan jika slug sudah ada di database
        while (Sain::where('slug', $slug)->exists()) {
            $counter++;
            $slug = $baseSlug . '-' . $counter;
        }
        // --- LOGIKA SLUG BARU SELESAI ---

        $path = $request->file('image')->store('sain_images', 'public');
        $filename = basename($path);

        Sain::create([
            'title' => $request->title,
            'slug' => $slug, // Gunakan slug baru yang sudah unik
            'short_description' => $request->short_description,
            'content' => $request->content,
            'image' => $filename,
            'published_date' => $request->published_date,
            'author' => $request->author,
            'editor' => $request->editor,
            'photographer' => $request->photographer,
        ]);

        return redirect()->route('sains.admin.index')->with('add_sukses', 'Data berhasil ditambahkan.');
    }

    
    public function show($id)
    {
        // Cari data berdasarkan ID, jika tidak ketemu akan menampilkan error 404
        $sain = Sain::findOrFail($id);
        
        // Tampilkan view 'sains.detail' dan kirim data yang ditemukan
        return view('sains.detail', compact('sain'));
    }

    /**
     * Menampilkan form untuk mengedit data.
     */
    public function edit($id)
    {
        $sain = Sain::findOrFail($id);
        return view('sains.edit', compact('sain'));
    }

    /**
     * Memperbarui data di database. (VERSI BARU)
     */
    public function update(Request $request, $id)
    {
        $sain = Sain::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:300',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_date' => 'required|date',
        ]);

        // --- LOGIKA SLUG BARU UNTUK UPDATE ---
        $baseSlug = Str::slug($request->title, '-');
        $slug = $baseSlug;
        $counter = 1;
        // Lakukan perulangan jika slug sudah ada, KECUALI untuk data yang sedang diedit ini
        while (Sain::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $counter++;
            $slug = $baseSlug . '-' . $counter;
        }
        // --- LOGIKA SLUG BARU SELESAI ---

        $filename = $sain->image;
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete('sain_images/' . $sain->image);
            $path = $request->file('image')->store('sain_images', 'public');
            $filename = basename($path);
        }

        $sain->update([
            'title' => $request->title,
            'slug' => $slug, // Gunakan slug baru yang sudah unik
            'short_description' => $request->short_description,
            'content' => $request->content,
            'image' => $filename,
            'published_date' => $request->published_date,
            'author' => $request->author,
            'editor' => $request->editor,
            'photographer' => $request->photographer,
        ]);

        return redirect()->route('sains.admin.index')->with('edit_sukses', 'Data berhasil diperbarui.');
    }


    /**
     * Menghapus data dari database.
     */
    public function destroy($id)
    {
        try {
            $sain = Sain::findOrFail($id);
            // Hapus gambar dari storage
            Storage::disk('public')->delete('sain_images/' . $sain->image);
            // Hapus data dari database
            $sain->delete();
            return redirect()->route('sains.admin.index')->with('delete_sukses', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('sains.admin.index')->with('delete_gagal', 'Terjadi kesalahan saat menghapus data.');
        }
    }
}