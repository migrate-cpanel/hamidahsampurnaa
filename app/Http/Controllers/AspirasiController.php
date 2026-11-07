<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi; // Import model Aspirasi
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    /**
     * Menyimpan aspirasi baru dari form publik.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate(
            // --- ATURAN VALIDASI ---
            [
                'peran' => 'required|string',
                'nama_lengkap' => 'required|string|max:255',
                'nama_siswa' => 'nullable|string|max:255',
                'jenjang' => 'required|string',
                'jalur_aspirasi' => 'required|string',
                'kategori_aspirasi' => 'required|string',
                'kategori_lainnya' => 'required_if:kategori_aspirasi,Lainnya|nullable|string|max:255',
                'aspirasi_detail' => 'required|string',
                'pertemuan' => 'required|string',

                // MODIFIKASI: Ubah aturan validasi untuk 'kontak'
                // Wajib jika pertemuan='Ya', harus angka, dan panjangnya 10-15 digit.
                'kontak' => 'required_if:pertemuan,Ya|nullable|numeric|digits_between:10,15',
            ],
            // --- PESAN ERROR KUSTOM (SANGAT DIREKOMENDASIKAN) ---
            [
                'kontak.required_if' => 'Nomor kontak wajib diisi jika Anda bersedia bertemu langsung.',
                'kontak.numeric' => 'Format nomor kontak tidak valid, harap hanya gunakan angka.',
                'kontak.digits_between' => 'Nomor kontak harus memiliki panjang antara 10 hingga 15 digit.',
            ]
        );

        // Buat record baru di database
        Aspirasi::create($validatedData);

        // Redirect kembali ke halaman form dengan pesan sukses
        return redirect()->back()->with('success', 'Terima kasih! Aspirasi Anda telah berhasil kami terima.');
    }

    /**
     * Menampilkan daftar aspirasi di halaman admin.
     */
    public function index()
    {
        // Ambil semua data aspirasi, urutkan dari yang terbaru
        $aspirasis = Aspirasi::latest()->get();
        return view('aspirasi.index', compact('aspirasis'));
    }

    /**
     * Menampilkan detail satu aspirasi.
     */
    public function show($id)
    {
        $aspirasi = Aspirasi::findOrFail($id);
        return view('aspirasi.show', compact('aspirasi'));
    }

    /**
     * Menghapus data aspirasi.
     */
    public function destroy($id)
    {
        $aspirasi = Aspirasi::findOrFail($id);
        $aspirasi->delete();

        return redirect()->route('aspirasi.admin.index')->with('delete_sukses', 'Data aspirasi berhasil dihapus.');
    }
}
