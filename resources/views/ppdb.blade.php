@extends('main_blog')

@section('title', 'Beranda')

@section('content')

<link rel="stylesheet" href="{{ asset('/theme') }}/css/ppdb.css">

<main>
    
    <header class="ppdb-header">
        <div class="header-content">
            <h1>Penerimaan Peserta Didik Baru (PPDB)</h1>
            <h2>Sekolah Hamidah Sampurna</h2>
            <p>
                Kami membuka kesempatan seluas-luasnya bagi calon peserta didik untuk bergabung dalam ekosistem pendidikan Islami, modern, dan berbasis teknologi. Proses PPDB kami dirancang agar mudah, transparan, dan informatif.
            </p>
        </div>
    </header>

    <div class="ppdb-content-wrapper">

        <section class="ppdb-section">
            <h3 class="section-title">Jenjang yang Dibuka</h3>
            <div class="jenjang-grid">
                <div id="jenjang-pg" class="jenjang-card">
                    <h4>Playgroup (PG)</h4>
                </div>

                <div id="jenjang-tk" class="jenjang-card">
                    <h4>Taman Kanak-Kanak (TK A & TK B)</h4>
                </div>

                <div id="jenjang-sd" class="jenjang-card">
                    <h4>Sekolah Dasar (SD)</h4>
                </div>

                <div id="jenjang-smp" class="jenjang-card">
                    <h4>Sekolah Menengah Pertama (SMP)</h4>
                </div>
            </div>
        </section>

        <section class="ppdb-section">
            <h3 class="section-title">Syarat Pendaftaran</h3>
            <div class="syarat-container">
                <div class="syarat-box">
                    <h4>Syarat Umum</h4>
                    <ul>
                        <li>Mengisi formulir pendaftaran (online/offline)</li>
                        <li>Fotokopi akta kelahiran</li>
                        <li>Fotokopi Kartu Keluarga (KK)</li>
                        <li>Pas foto ukuran 3x4 (2 lembar)</li>
                        <li>Fotokopi KTP orang tua/wali</li>
                    </ul>
                </div>
                <div class="syarat-box syarat-tambahan">
                    <h4>Tambahan Khusus SMP</h4>
                    <ul>
                        <li>Fotokopi Halaman Depan Rapor (Biodata)</li>
                        <li>Surat Keterangan Lulus (SKL)</li>
                        <li>SKCK dari sekolah asal</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="ppdb-section">
            <h3 class="section-title">Tahapan Pendaftaran</h3>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>Pendaftaran & Pengisian Formulir</h4>
                        <p>Dapat dilakukan secara online melalui website resmi atau datang langsung ke sekolah.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>Observasi, Psikotes, & Wawancara</h4>
                        <p>Tes untuk menggali aspek kognitif, emosional, dan sosial siswa, serta wawancara dengan orang tua untuk menyamakan visi pendidikan.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>Pengumuman Hasil Seleksi</h4>
                        <p>Hasil seleksi akan disampaikan secara personal melalui notifikasi WhatsApp oleh tim PPDB.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h4>Registrasi Ulang & Pembayaran</h4>
                        <p>Proses finalisasi berupa pelunasan biaya pendidikan yang telah disepakati bersama.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="btn-container">
            <a href="https://ppdb.hamidahsampurna.sch.id/" target="_blank" rel="noopener noreferrer" class="btn-ppdb">
                Daftar Sekarang
            </a>
        </div>

    </div>

</main>


@endsection