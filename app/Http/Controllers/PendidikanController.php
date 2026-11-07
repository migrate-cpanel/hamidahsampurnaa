<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PendidikanController extends Controller
{
    // --- FUNGSI UNTUK HALAMAN PUBLIK (Tidak Berubah) ---
    public function publicIndex()
    {
        $pendidikans = Pendidikan::orderBy('published_date', 'desc')
                                 ->orderBy('id', 'desc')
                                 ->paginate(9);
        return view('pendidikan-berbasis-nilai-islam', compact('pendidikans'));
    }

    public function publicShow(Pendidikan $pendidikan)
    {
        return view('contoh-pendidikan', compact('pendidikan'));
    }

    // --- FUNGSI UNTUK HALAMAN ADMIN (Tidak Berubah) ---
    public function index()
    {
        $pendidikans = Pendidikan::latest()->get();
        return view('pendidikan.index', compact('pendidikans'));
    }

    public function create()
    {
        return view('pendidikan.add');
    }

    public function show($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        // Kita akan membuat view 'pendidikan.show' di langkah berikutnya
        return view('pendidikan.show', compact('pendidikan'));
    }

    public function edit($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        return view('pendidikan.edit', compact('pendidikan'));
    }

    public function destroy($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        Storage::disk('public')->delete('pendidikan_images/'.$pendidikan->image);
        $pendidikan->delete();
        return redirect()->route('pendidikan.admin.index')->with('delete_sukses', 'Data berhasil dihapus.');
    }

    // --- FUNGSI CREATE & UPDATE DENGAN LOGIKA SLUG BARU ---

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:600',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'published_date' => 'required|date',
            'author' => 'nullable|string',
            'editor' => 'nullable|string',
            'photographer' => 'nullable|string',
        ]);

        // PERBAIKAN: Gunakan fungsi baru untuk membuat slug yang cerdas
        $validated['slug'] = $this->createSlug($validated['title']);

        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('pendidikan_images', $imageName, 'public');
        $validated['image'] = $imageName;

        Pendidikan::create($validated);
        return redirect()->route('pendidikan.admin.index')->with('add_sukses', 'Data berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $validated = $request->validate([
             'title' => 'required|string|max:255',
             'short_description' => 'required|string|max:600',
             'content' => 'required|string',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
             'published_date' => 'required|date',
             'author' => 'nullable|string',
             'editor' => 'nullable|string',
             'photographer' => 'nullable|string',
        ]);

        // PERBAIKAN: Gunakan fungsi baru untuk membuat slug yang cerdas
        $validated['slug'] = $this->createSlug($validated['title'], $id);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete('pendidikan_images/'.$pendidikan->image);
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('pendidikan_images', $imageName, 'public');
            $validated['image'] = $imageName;
        }

        $pendidikan->update($validated);
        return redirect()->route('pendidikan.admin.index')->with('edit_sukses', 'Data berhasil diperbarui.');
    }

    // --- FUNGSI BARU UNTUK MEMBUAT SLUG YANG CERDAS ---
    
    private function createSlug($title, $id = 0)
    {
        // Buat slug dasar dari judul
        $slug = Str::slug($title, '-');
        
        // Cek apakah ada slug yang sama di database, kecuali untuk ID saat ini (saat update)
        $allSlugs = Pendidikan::where('slug', 'like', $slug . '%')
                              ->where('id', '<>', $id)
                              ->pluck('slug');
        
        // Jika slug dasar belum ada, langsung gunakan
        if (!$allSlugs->contains($slug)){
            return $slug;
        }

        // Jika sudah ada, tambahkan angka di belakangnya
        $i = 1;
        $is_contain = true;
        do {
            $newSlug = $slug . '-' . $i;
            if (!$allSlugs->contains($newSlug)) {
                $is_contain = false;
                return $newSlug;
            }
            $i++;
        } while ($is_contain);
    }
}