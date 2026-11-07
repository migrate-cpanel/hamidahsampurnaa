<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SainController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\Admin\VisitorLogController;
use App\Http\Controllers\IntegrasiTeknologiController;
use App\Http\Controllers\StrukturOrganisasiController;
// 'use' untuk Hash dan Admin tidak diperlukan lagi di sini
// use Illuminate\Support\Facades\Hash;
// use App\Models\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda dapat mendaftarkan rute web untuk aplikasi Anda. Rute-rute
| ini dimuat oleh RouteServiceProvider dalam sebuah grup yang
| berisi middleware group "web".
|
*/

// Rute sementara sudah dihapus dari versi ini

// ----------------------
// ROUTE UMUM (Public)
// ----------------------
Route::get('/', [FrontController::class, 'beranda'])->name('beranda');
Route::get('kontak', [FrontController::class, 'kontak'])->name('kontak');
Route::get('berita', [FrontController::class, 'berita'])->name('berita');
Route::get('berita/{slug}', [FrontController::class, 'beritaDetail'])->name('berita.detail');
Route::get('profil', [FrontController::class, 'profil'])->name('profil');
Route::get('program', [FrontController::class, 'program'])->name('program');
Route::get('galeri-kegiatan', [FrontController::class, 'galerikegiatan'])->name('galerikegiatan');
Route::get('ppdb', [FrontController::class, 'ppdb'])->name('ppdb');
Route::get('kebijakan-pendidikan-karakter', [FrontController::class, 'KebijakanPendidikanKarakter'])->name('KebijakanPendidikanKarakter');
Route::get('fasilitas-unggulan', [FrontController::class, 'FasilitasUnggulan'])->name('FasilitasUnggulan');
Route::get('ekstrakurikuler', [FrontController::class, 'Ekstrakurikuler'])->name('Ekstrakurikuler');
// Route::get('event', [FrontController::class, 'Event'])->name('Event');
Route::get('/event', [EventController::class, 'showAllEvents'])->name('event.list');
Route::get('/event/{slug}', [EventController::class, 'showEventDetail'])->name('event.detail');
Route::get('contoh-event', [FrontController::class, 'ContohEvent'])->name('ContohEvent');
Route::get('contoh-berita', [FrontController::class, 'ContohBerita'])->name('ContohBerita');
Route::get('hamidah-voice', [FrontController::class, 'HamidahVoice'])->name('HamidahVoice');
// Route::get('pendidikan-berbasis-nilai-islam', [FrontController::class, 'PendidikanBerbasisNilaiIslam'])->name('PendidikanBerbasisNilaiIslam');
// Route::get('contoh-pendidikan', [FrontController::class, 'ContohPendidikan'])->name('ContohPendidikan');

// TAMBAHKAN DUA ROUTE DINAMIS BARU INI
Route::get('pendidikan-berbasis-nilai-islam', [PendidikanController::class, 'publicIndex'])->name('pendidikan.list');
// URL akan menjadi /pendidikan/nama-slug-artikel-nya
Route::get('pendidikan/{pendidikan:slug}', [PendidikanController::class, 'publicShow'])->name('pendidikan.detail');
Route::get('/sains-dan-pengetahuan-modern', [SainController::class, 'publicIndex'])->name('sains.public.index');
Route::get('/sains-dan-pengetahuan-modern/{sain:slug}', [SainController::class, 'publicShow'])->name('sains.public.detail');
Route::get('/integrasi-teknologi', [IntegrasiTeknologiController::class, 'showList'])->name('integrasi.list');
Route::get('/integrasi-teknologi/{slug}', [IntegrasiTeknologiController::class, 'showDetail'])->name('integrasi.detail');
Route::post('/kirim-aspirasi', [AspirasiController::class, 'store'])->name('aspirasi.store');
Route::post('/kontak/kirim', [ContactController::class, 'send'])->name('contact.send');

// Route::get('sains-dan-pengetahuan-modern', [FrontController::class, 'SainsDanPengetahuanModern'])->name('SainsDanPengetahuanModern');
// Route::get('contoh-sains', [FrontController::class, 'ContohSains'])->name('ContohSains');

// Route::get('integrasi-teknologi', [FrontController::class, 'InegrasiTeknologi'])->name('InegrasiTeknologi');
// Route::get('contoh-integrasi', [FrontController::class, 'ContohIntegrasi'])->name('ContohIntegrasi');



// Gantikan rute lama Anda untuk '/' dengan ini
// Route::get('/', [VisitorController::class, 'index']);

// ------------------------------------
// ROUTE AUTENTIKASI (LOGIN & LOGOUT)
// ------------------------------------

// Middleware 'guest' memastikan user yang sudah login tidak bisa mengakses halaman ini lagi
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/login', [AuthController::class, 'login']); // URL untuk proses login, tidak perlu nama rute
});

// Rute untuk proses logout, hanya bisa diakses oleh user yang sudah login
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');


// ----------------------------------------------------
// ROUTE PROTECTED (Hanya bisa diakses setelah login)
// ----------------------------------------------------

// Menggunakan middleware 'auth' bawaan Laravel
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Prefix 'admin' untuk merapikan URL, contoh: /admin/news, /admin/sliders, dst.
    Route::prefix('admin')->group(function () {

        // News
        Route::get('news', [NewsController::class, 'index'])->name('news.index');
        Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('news', [NewsController::class, 'store'])->name('news.store');
        Route::get('news/{id}/show', [NewsController::class, 'show'])->name('news.show'); 
        Route::get('news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
        Route::post('news/{id}', [NewsController::class, 'update'])->name('news.update');
        Route::get('news/{id}/delete', [NewsController::class, 'destroy'])->name('news.delete');

        // Sliders
        Route::get('sliders', [SlidersController::class, 'index'])->name('sliders.index');
        Route::get('sliders/create', [SlidersController::class, 'create'])->name('sliders.create');
        Route::post('sliders', [SlidersController::class, 'add'])->name('sliders.store');
        Route::get('sliders/{id}/edit', [SlidersController::class, 'edit'])->name('sliders.edit');
        Route::post('sliders/{id}', [SlidersController::class, 'update'])->name('sliders.update');
        Route::get('sliders/delete/{id}', [SlidersController::class, 'delete'])->name('sliders.delete');

        // Testimonials
        Route::get('testimonials', [TestimonialsController::class, 'index'])->name('testimonials.index');
        Route::get('testimonials/create', [TestimonialsController::class, 'create'])->name('testimonials.create');
        Route::post('testimonials', [TestimonialsController::class, 'add'])->name('testimonials.store');
        Route::get('testimonials/{id}/edit', [TestimonialsController::class, 'edit'])->name('testimonials.edit');
        Route::post('testimonials/{id}', [TestimonialsController::class, 'update'])->name('testimonials.update');
        Route::get('testimonials/{id}/delete', [TestimonialsController::class, 'delete'])->name('testimonials.delete');

        // Pengguna
        Route::get('pengguna', [PenggunaController::class, 'index'])->name('pengguna.index');
        Route::get('pengguna/create', [PenggunaController::class, 'create'])->name('pengguna.create');
        Route::post('pengguna', [PenggunaController::class, 'add'])->name('pengguna.store');
        Route::get('pengguna/{id}/edit', [PenggunaController::class, 'edit'])->name('pengguna.edit');
        Route::post('pengguna/{id}', [PenggunaController::class, 'update'])->name('pengguna.update');
        Route::get('pengguna/{id}/delete', [PenggunaController::class, 'delete'])->name('pengguna.delete');
        
        Route::get('/integrasi-teknologi', [IntegrasiTeknologiController::class, 'index'])->name('integrasi.admin.index');
        Route::get('/integrasi-teknologi/create', [IntegrasiTeknologiController::class, 'create'])->name('integrasi.admin.create');
        Route::post('/integrasi-teknologi', [IntegrasiTeknologiController::class, 'store'])->name('integrasi.admin.store');
        Route::get('/integrasi-teknologi/{id}/show', [IntegrasiTeknologiController::class, 'show'])->name('integrasi.admin.show');
        Route::get('/integrasi-teknologi/{id}/edit', [IntegrasiTeknologiController::class, 'edit'])->name('integrasi.admin.edit');
        Route::put('/integrasi-teknologi/{id}', [IntegrasiTeknologiController::class, 'update'])->name('integrasi.admin.update');
        Route::get('/integrasi-teknologi/delete/{id}', [IntegrasiTeknologiController::class, 'destroy'])->name('integrasi.admin.destroy');

        Route::get('/sains', [SainController::class, 'adminIndex'])->name('sains.admin.index');
        Route::get('/sains/create', [SainController::class, 'create'])->name('sains.admin.create');
        Route::post('/sains', [SainController::class, 'store'])->name('sains.admin.store');
        Route::get('/sains/{id}/show', [SainController::class, 'show'])->name('sains.admin.show');
        Route::get('/sains/{id}/edit', [SainController::class, 'edit'])->name('sains.admin.edit');
        Route::put('/sains/{id}', [SainController::class, 'update'])->name('sains.admin.update');
        // Menggunakan GET untuk delete agar sesuai dengan script JS, meskipun DELETE/POST lebih disarankan
        Route::get('/sains/{id}/delete', [SainController::class, 'destroy'])->name('sains.admin.destroy');
        
        Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi.admin.index');
        Route::get('/aspirasi/{id}', [AspirasiController::class, 'show'])->name('aspirasi.admin.show');
        Route::get('/aspirasi/hapus/{id}', [AspirasiController::class, 'destroy'])->name('aspirasi.admin.destroy');

        // PASTIKAN ROUTE PENDIDIKAN ADA DI DALAM SINI
        Route::prefix('pendidikan')->group(function () {
            Route::get('/', [PendidikanController::class, 'index'])->name('pendidikan.admin.index');
            Route::get('/add', [PendidikanController::class, 'create'])->name('pendidikan.admin.create');
            Route::post('/store', [PendidikanController::class, 'store'])->name('pendidikan.admin.store');
            Route::get('/show/{id}', [PendidikanController::class, 'show'])->name('pendidikan.admin.show');
            Route::get('/edit/{id}', [PendidikanController::class, 'edit'])->name('pendidikan.admin.edit');
            Route::post('/update/{id}', [PendidikanController::class, 'update'])->name('pendidikan.admin.update');
            Route::get('/delete/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.admin.destroy');
        });

        // UBAH BAGIAN INI
        Route::prefix('logos')->name('logos.admin.')->group(function () {
            Route::get('/', [LogoController::class, 'index'])->name('index');
            Route::get('/create', [LogoController::class, 'create'])->name('create');
            Route::post('/', [LogoController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [LogoController::class, 'edit'])->name('edit');
            Route::put('/{id}', [LogoController::class, 'update'])->name('update');
            Route::get('/{id}/delete', [LogoController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('struktur-organisasi')->name('struktur.admin.')->group(function () {
                Route::get('/', [StrukturOrganisasiController::class, 'index'])->name('index');
                Route::post('/', [StrukturOrganisasiController::class, 'store'])->name('store');
                // Kita tetap pakai GET untuk delete agar cocok dengan script JS dari jawaban sebelumnya
                Route::get('/delete/{id}', [StrukturOrganisasiController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('ekskul')->name('ekskul.')->group(function () {
            Route::get('/', [EkskulController::class, 'index'])->name('index');
            Route::get('/create', [EkskulController::class, 'create'])->name('create');
            Route::post('/store', [EkskulController::class, 'store'])->name('store');
            Route::get('/{id}/show', [EkskulController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [EkskulController::class, 'edit'])->name('edit');
            Route::post('/{id}/update', [EkskulController::class, 'update'])->name('update');
            Route::get('/{id}/delete', [EkskulController::class, 'destroy'])->name('destroy');
            // Rute untuk menghapus gambar individual
            Route::get('/image/{imageId}/delete', [EkskulController::class, 'destroyImage'])->name('image.destroy');
        });
    
         Route::prefix('kegiatan')->name('admin.kegiatan.')->group(function () {
            Route::get('/', [KegiatanController::class, 'index'])->name('index');
            Route::get('/create', [KegiatanController::class, 'create'])->name('create');
            Route::post('/store', [KegiatanController::class, 'store'])->name('store');
            Route::get('/{id}/show', [KegiatanController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [KegiatanController::class, 'edit'])->name('edit');
            Route::post('/{id}/update', [KegiatanController::class, 'update'])->name('update');
            Route::get('/{id}/delete', [KegiatanController::class, 'destroy'])->name('destroy');
            Route::get('/image/{imageId}/delete', [KegiatanController::class, 'destroyImage'])->name('image.destroy');
        });

        Route::prefix('events')->name('event.')->group(function () {
            Route::get('/', [EventController::class, 'index'])->name('index');
            Route::get('/create', [EventController::class, 'create'])->name('create');
            Route::post('/', [EventController::class, 'store'])->name('store');
            Route::get('/{event}', [EventController::class, 'show'])->name('show');
            Route::get('/{event}/edit', [EventController::class, 'edit'])->name('edit');
            Route::put('/{event}', [EventController::class, 'update'])->name('update');
            Route::delete('/{event}', [EventController::class, 'destroy'])->name('destroy');
        });
    
            // Route untuk Laporan Pengunjung
        Route::get('/visitor-logs', [VisitorLogController::class, 'index'])->name('visitor.logs.index');
        Route::get('/visitor-logs/delete/{date}', [VisitorLogController::class, 'destroy'])->name('visitor.logs.destroy');
    });
});