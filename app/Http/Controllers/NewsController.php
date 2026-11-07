<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
         $data = News::orderBy('published_date', 'desc')->orderBy('id', 'desc')->paginate(10); 
         return view('news.index', compact('data'));
    }

    public function create()
    {
        return view('news.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:200',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'published_date' => 'required|date',
            'author' => 'nullable|string',
            'editor' => 'nullable|string',
            'photographer' => 'nullable|string',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = 'news' . time() . '.' . $file->getClientOriginalExtension();
            
            // PERBAIKAN: Ganti public_path jadi base_path
            $tujuan_upload = base_path('storage/news_images');
            
            // Buat folder otomatis jika belum ada
            if (!File::isDirectory($tujuan_upload)) {
                File::makeDirectory($tujuan_upload, 0777, true, true);
            }

            $file->move($tujuan_upload, $imageName);
            
            $validated['image'] = $imageName;
        }

        News::create(array_merge(
            $validated,
            [
                'image' => $imageName,
                'slug' => Str::slug($validated['title']),
                'idadmins' => auth()->id() 
            ]
        ));

        return redirect()->route('news.index')->with('add_sukses', 'Berita berhasil ditambahkan.');
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        
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

        $validated['slug'] = Str::slug($validated['title']);
        
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($news->image) {
                // PERBAIKAN: Ganti public_path jadi base_path
                $gambar_lama = base_path('storage/news_images/' . $news->image);
                if (File::exists($gambar_lama)) {
                    File::delete($gambar_lama);
                }
            }

            // Upload gambar baru
            $file = $request->file('image');
            $imageName = 'news' . time() . '.' . $file->getClientOriginalExtension();
            
            // PERBAIKAN: Ganti public_path jadi base_path
            $tujuan_upload = base_path('storage/news_images');
            $file->move($tujuan_upload, $imageName);
            
            $validated['image'] = $imageName;
        }

        $news->update($validated);
        return redirect()->route('news.index')->with('edit_sukses', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        
        if ($news->image) {
            // PERBAIKAN: Ganti public_path jadi base_path
            $path_gambar = base_path('storage/news_images/' . $news->image);
            if (File::exists($path_gambar)) {
                File::delete($path_gambar);
            }
        }
        
        $news->delete();
        return redirect()->back()->with('delete_sukses', 'Berita berhasil dihapus!');
    }
}