<?php

namespace App\Http\Controllers;

// MODEL YANG DIGUNAKAN
use App\Models\Logo; 
use App\Models\Ekskul;
use App\Models\Kegiatan;
use App\Models\StrukturOrganisasi;
use App\Models\Event; // <-- TAMBAHKAN INI
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function login_page()
    {
        return view('auth.login');
    }

    // UBAH FUNGSI INI
    public function beranda()
    {
        // Kode untuk mengambil logo tetap ada
        $logos = Logo::all(); 

        // Kode untuk mengambil slider tetap ada
        $sliders = DB::table('sliders')->orderBy('id', 'desc')->get();

        // ==========================================================
        // === TAMBAHKAN BARIS INI UNTUK MENGAMBIL DATA EVENT TERBARU ===
        // ==========================================================
        $latestEvents = Event::orderBy('start_datetime', 'desc')->take(3)->get();

        // Kirim SEMUA variabel ($logos, $sliders, dan $latestEvents) ke view
        return view('beranda', compact('logos', 'sliders', 'latestEvents')); 
    }

    public function kontak()
    {
        return view('kontak');
    }
    public function profil()
    {
        $struktur = StrukturOrganisasi::first(); 
        return view('profil', ['struktur' => $struktur]);
    }
    public function program()
    {
        return view('program');
    }
    public function galerikegiatan()
    {
        $kegiatans = Kegiatan::with('images')->latest()->get();
        return view('galeri-kegiatan', compact('kegiatans'));
    }
    public function ppdb()
    {
        return view('ppdb');
    }
    public function PendidikanBerbasisNilaiIslam()
    {
        return view('pendidikan-berbasis-nilai-islam');
    }
    public function SainsDanPengetahuanModern()
    {
        return view('sains-dan-pengetahuan-modern');
    }
    public function InegrasiTeknologi()
    {
        return view('integrasi-teknologi');
    }
    public function KebijakanPendidikanKarakter()
    {
        return view('kebijakan-pendidikan-karakter');
    }
    public function FasilitasUnggulan()
    {
        return view('fasilitas-unggulan');
    }
    public function Ekstrakurikuler()
    {
        $ekskuls = Ekskul::with('images')->latest()->get();
        return view('ekstrakurikuler', compact('ekskuls'));
    }

    // ==========================================================
    // === FUNGSI INI BOLEH DIHAPUS KARENA SUDAH DI-HANDLE EVENTCONTROLLER ===
    // public function Event()
    // {
    //     return view('event');
    // }
    // public function Contohevent()
    // {
    //     return view('contoh-event');
    // }
    // ==========================================================
    
    public function ContohPendidikan()
    {
        return view('contoh-pendidikan');
    }
    public function ContohSains()
    {
        return view('contoh-sains');
    }
    public function ContohIntegrasi()
    {
        return view('contoh-integrasi');
    }
    public function ContohBerita()
    {
        return view('contoh-berita');
    }
    public function HamidahVoice()
    {
        return view('hamidah-voice');
    }

    public function berita()
    {
        // Mengurutkan berdasarkan Tanggal Publikasi dari yang terbaru
        $data = DB::table('news')->orderby('published_date', 'desc')->paginate(9);
        return view('berita', ['data' => $data]);
    }
    public function beritaDetail($slug)
    {
        $berita = \App\Models\News::where('slug', $slug)->firstOrFail();
        return view('contoh-berita', compact('berita'));
    }
}