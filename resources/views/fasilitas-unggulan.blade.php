@extends('main_blog')

@section('title', 'Beranda')

@section('content')

<link rel="stylesheet" href="{{ asset('/theme') }}/css/fasilitas.css">

    

       <header class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Fasilitas Sekolah</h1>
            <p>Mendukung potensi siswa secara holistik dalam lingkungan yang inspiratif.</p>
        </div>
    </header>

    <main class="container-f">
        <div class="intro-text">
             <h2>Fasilitas Unggulan Kami</h2>
             <p>Setiap ruang dan fasilitas dirancang untuk mendukung pengembangan potensi siswa secara holistik, baik dalam aspek kognitif, sosial, emosional, maupun spiritual.</p>
        </div>

        <div class="facility-grid">
            
            <div class="facility-card">
                <div class="card-image" style="background-image: url('{{ asset('theme/img/fasilitas/Kelas.jpg') }}');"></div>
                <div class="card-content">
                    <h3><i class="fa-solid fa-chalkboard-user"></i> Ruang Kelas</h3>
                    <p>Nyaman dan modern dengan perangkat digital untuk mendukung interaksi aktif.</p>
                </div>
            </div>

            <div class="facility-card">
                <div class="card-image" style="background-image: url('{{ asset('theme/img/fasilitas/pojok membaca2.jpg') }}');"></div>
                <div class="card-content">
                    <h3><i class="fa-solid fa-book-open-reader"></i> Pojok Membaca</h3>
                    <p>Menumbuhkan budaya literasi dengan koleksi buku yang beragam dan sesuai usia.</p>
                </div>
            </div>

            <div class="facility-card">
                <div class="card-image" style="background-image: url('{{ asset('theme/img/fasilitas/Auditorium.jpg') }}');"></div>
                <div class="card-content">
                    <h3><i class="fa-solid fa-masks-theater"></i> Auditorium</h3>
                    <p>Ruang serbaguna dengan audio-visual lengkap untuk pentas seni dan seminar.</p>
                </div>
            </div>
            
            <div class="facility-card">
                <div class="card-image" style="background-image: url('{{ asset('theme/img/fasilitas/Lapangan.jpg') }}');"></div>
                <div class="card-content">
                    <h3><i class="fa-solid fa-futbol"></i> Lapangan Olahraga</h3>
                    <p>Area outdoor untuk futsal, basket, dan aktivitas fisik lainnya.</p>
                </div>
            </div>

            <div class="facility-card">
                <div class="card-image" style="background-image: url('{{ asset('theme/img/fasilitas/Kolam.jpg') }}');"></div>
                <div class="card-content">
                    <h3><i class="fa-solid fa-person-swimming"></i> Kolam Renang</h3>
                    <p>Kolam renang anak yang bersih dan aman untuk pelatihan renang dasar.</p>
                </div>
            </div>

            <div class="facility-card">
                <div class="card-image" style="background-image: url('{{ asset('theme/img/fasilitas/Kafe1.jpg') }}');"></div>
                <div class="card-content">
                    <h3><i class="fa-solid fa-utensils"></i> Kafe Siswa</h3>
                    <p>Menyediakan makanan bergizi dalam ruang interaksi yang mendidik.</p>
                </div>
            </div>
            
            <div class="facility-card">
                <div class="card-image" style="background-image: url('{{ asset('theme/img/fasilitas/Uks.jpg') }}');"></div>
                <div class="card-content">
                    <h3><i class="fa-solid fa-kit-medical"></i> UKS</h3>
                    <p>Dilengkapi perlengkapan medis dasar untuk pertolongan pertama.</p>
                </div>
            </div>
            
            <div class="facility-card">
                <div class="card-image" style="background-image: url('{{ asset('theme/img/fasilitas/Mushola.jpg') }}');"></div>
                <div class="card-content">
                    <h3><i class="fa-solid fa-mosque"></i> Mushola</h3>
                    <p>Fasilitas ibadah yang nyaman untuk mendukung pembinaan spiritual.</p>
                </div>
            </div>

            <div class="facility-card">
                <div class="card-image" style="background-image: url('{{ asset('theme/img/fasilitas/Podcast1.jpg') }}');"></div>
                <div class="card-content">
                    <h3><i class="fa-solid fa-podcast"></i> Podcast Room</h3>
                    <p>Ruang kreatif untuk mengembangkan keterampilan komunikasi dan literasi digital.</p>
                </div>
            </div>
            
        </div>
    </main>





@endsection