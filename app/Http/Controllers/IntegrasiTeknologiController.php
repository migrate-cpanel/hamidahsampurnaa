<?php

namespace App\Http\Controllers;

use App\Models\IntegrasiTeknologi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;

class IntegrasiTeknologiController extends Controller
{
    // --- FUNGSI UNTUK HALAMAN ADMIN (CRUD) ---

    public function index()
    {
        // PERBAIKAN: Menggunakan latest() agar data yang baru dibuat selalu di atas.
        $integrasiTeknologis = IntegrasiTeknologi::latest()->get();
        return view('integrasi_teknologi.index', compact('integrasiTeknologis'));
    }

    public function create()
    {
        return view('integrasi_teknologi.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_date' => 'required|date',
        ]);

        // PERBAIKAN: Mengadopsi logika slug yang lebih baik dari SainController
        $baseSlug = Str::slug($request->title, '-');
        $slug = $baseSlug;
        $counter = 1;
        while (IntegrasiTeknologi::where('slug', $slug)->exists()) {
            $counter++;
            $slug = $baseSlug . '-' . $counter;
        }

        $imagePath = $request->file('image')->store('integrasi_teknologi_images', 'public');

        IntegrasiTeknologi::create([
            'title' => $request->title,
            'slug' => $slug, // Menggunakan slug baru yang unik
            'short_description' => $request->short_description,
            'content' => $request->content,
            'image' => basename($imagePath),
            'published_date' => $request->published_date,
            'author' => $request->author,
            'editor' => $request->editor,
            'photographer' => $request->photographer,
        ]);

        return redirect()->route('integrasi.admin.index')->with('add_sukses', 'Data berhasil ditambahkan.');
    }

    public function show($id)
    {
        $integrasi = IntegrasiTeknologi::findOrFail($id);
        return view('integrasi_teknologi.show', compact('integrasi'));
    }

    public function edit($id)
    {
        $integrasi = IntegrasiTeknologi::findOrFail($id);
        return view('integrasi_teknologi.edit', compact('integrasi'));
    }

    public function update(Request $request, $id)
    {
        $integrasi = IntegrasiTeknologi::findOrFail($id);
        
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'content' => 'required|string',
            'published_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        // PERBAIKAN: Mengadopsi logika slug update dari SainController
        $baseSlug = Str::slug($request->title, '-');
        $slug = $baseSlug;
        $counter = 1;
        while (IntegrasiTeknologi::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $counter++;
            $slug = $baseSlug . '-' . $counter;
        }

        $filename = $integrasi->image;
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete('integrasi_teknologi_images/' . $integrasi->image);
            $path = $request->file('image')->store('integrasi_teknologi_images', 'public');
            $filename = basename($path);
        }

        $integrasi->update([
            'title' => $request->title,
            'slug' => $slug, // Menggunakan slug baru yang unik
            'short_description' => $request->short_description,
            'content' => $request->content,
            'image' => $filename,
            'published_date' => $request->published_date,
            'author' => $request->author,
            'editor' => $request->editor,
            'photographer' => $request->photographer,
        ]);

        return redirect()->route('integrasi.admin.index')->with('edit_sukses', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $integrasi = IntegrasiTeknologi::findOrFail($id);
        Storage::disk('public')->delete('integrasi_teknologi_images/' . $integrasi->image);
        $integrasi->delete();

        return redirect()->route('integrasi.admin.index')->with('delete_sukses', 'Data berhasil dihapus.');
    }

    // --- FUNGSI UNTUK HALAMAN FRONTEND ---

    public function showList()
    {
        // PERBAIKAN: Menggunakan urutan 2 tingkat seperti SainController
        $integrasiTeknologis = IntegrasiTeknologi::orderBy('published_date', 'desc') // Prioritas 1: Tanggal terbaru
                                              ->orderBy('created_at', 'desc')     // Prioritas 2: Waktu input terbaru
                                              ->paginate(9);
                                              
        return view('integrasi-teknologi', compact('integrasiTeknologis'));
    }

    public function showDetail($slug)
    {
        $integrasi = IntegrasiTeknologi::where('slug', $slug)->firstOrFail();
        return view('contoh-integrasi', compact('integrasi'));
    }
}