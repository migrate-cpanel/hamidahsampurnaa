<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    public function index()
    {
        $data = DB::table('sliders')->orderby('sliders.id', 'desc')->get();

        return view('sliders.index', ['data' => $data]);
    }

    public function create()
    {
        return view('sliders.add');
    }

    public function add(Request $request)
    {
        $request->validate([
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal 2MB
        ]);

        if ($request->hasFile('image1')) {
            // 1. Ambil file dari request
            $file = $request->file('image1');

            // 2. Buat nama file unik berdasarkan waktu
            $filename = 'sliders' . time() . '.' . $file->getClientOriginalExtension();

            // 3. Pindahkan file asli (tanpa kompresi) ke folder public
            $file->move(base_path('img/uploads'), $filename);

            // 4. Simpan nama file baru ke database
            DB::table('sliders')->insert([
                'image_url' => $filename,
                'created_at' => now(),
                'updated_at' => now(),
                'idadmins' => session()->get('id_user'),
            ]);
        }

        return redirect()->route('sliders.index')->with('add_sukses', 1);
    }

    public function edit($id)
    {
        $row = DB::table('sliders')->where('sliders.id', $id)->first();

        return view('sliders.edit', [
            'row' => $row,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal 2MB
        ]);

        if ($request->hasFile('image1')) {
            // Ambil data slider yang lama untuk mendapatkan nama file lama
            $oldSlider = DB::table('sliders')->where('id', $request->id)->first();

            // Hapus file lama jika ada
            if ($oldSlider && file_exists(base_path('img/uploads' . $oldSlider->image_url))) {
                unlink(base_path('img/uploads' . $oldSlider->image_url));
            }

            // Proses unggah file baru
            $file = $request->file('image1');
            $filename = 'sliders' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(base_path('img/uploads'), $filename);

            // Update database dengan nama file baru
            DB::table('sliders')
                ->where('id', $request->id)
                ->update([
                    'image_url' => $filename,
                    'updated_at' => now(),
                    'idadmins' => session()->get('id_user'),
                ]);
        }

        return redirect()->route('sliders.index')->with('edit_sukses', 1);
    }

    public function delete($id)
    {
        // 1. Cari data slider berdasarkan ID sebelum dihapus untuk mendapatkan nama filenya
        $slider = DB::table('sliders')->where('id', $id)->first();

        if ($slider) {
            // 2. Buat path lengkap ke file gambar di folder public
            $filePath = base_path('img/uploads' . $slider->image_url);

            // 3. Cek apakah file tersebut benar-benar ada, lalu hapus
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            // 4. Hapus record dari database
            DB::table('sliders')->where('id', $id)->delete();
        }

        // 5. Redirect kembali dengan pesan sukses
        return redirect()->back()->with('delete_sukses', 1);
    }
}
