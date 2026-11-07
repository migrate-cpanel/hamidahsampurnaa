<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; // Gunakan File

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $struktur = StrukturOrganisasi::first();
        return view('struktur_organisasi.index', compact('struktur'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $struktur = StrukturOrganisasi::firstOrNew();

        // HAPUS GAMBAR LAMA (MANUAL)
        if ($struktur->exists && $struktur->image) {
            $gambar_lama = base_path('storage/struktur_images/' . $struktur->image);
            if (File::exists($gambar_lama)) {
                File::delete($gambar_lama);
            }
        }

        // UPLOAD GAMBAR BARU (MANUAL KE BASE_PATH)
        $file = $request->file('image');
        $imageName = 'struktur' . time() . '.' . $file->extension();
        
        $tujuan = base_path('storage/struktur_images');
        
        // Buat folder otomatis kalau belum ada
        if (!File::isDirectory($tujuan)) {
            File::makeDirectory($tujuan, 0777, true, true);
        }

        $file->move($tujuan, $imageName);

        $struktur->image = $imageName;
        $struktur->save();

        return redirect()->route('struktur.admin.index')->with('sukses', 'Gambar struktur organisasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $struktur = StrukturOrganisasi::findOrFail($id);

        if ($struktur->image) {
            $gambar_lama = base_path('storage/struktur_images/' . $struktur->image);
            if (File::exists($gambar_lama)) {
                File::delete($gambar_lama);
            }
        }

        $struktur->delete();

        return redirect()->route('struktur.admin.index')->with('sukses', 'Gambar struktur organisasi berhasil dihapus.');
    }
}