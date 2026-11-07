@extends('main_blog')

@section('title', 'Ekstrakurikuler')

@section('content')

<link rel="stylesheet" href="{{ asset('/theme') }}/css/ekskul.css">

<div class="gallery-intro-container-v3">



    <section class="gallery-intro-content-v3">
        <h1>Ekstrakurikuler</h1>
        <p>Sekolah Hamidah Sampurna menghadirkan 9 program ekstrakurikuler yang dirancang untuk mendukung pembentukan karakter, pengembangan keterampilan, dan penyaluran bakat siswa di luar kegiatan belajar di kelas. Program ini mencakup aspek akademik dan non-akademik sehingga siswa dapat tumbuh menjadi pribadi yang seimbang antara pengetahuan, kreativitas, sportivitas, dan akhlak mulia. Ekstrakurikuler tersebut meliputi Taekwondo Club, Science Club, English Club, Swimming Club, Mathematic Club, Basketball Club, Robotic & IoT Club, Islamic Club, dan Roller Skating Club.</p>
    </section>
</div>

{{-- Bagian ini akan menampilkan data secara dinamis --}}
<section class="gallery-categories">

    @forelse ($ekskuls as $ekskul)
<div class="category-card">
    <h2>
        {{-- Variabel disesuaikan menjadi $ekskul->name --}}
        <a href="#" class="category-link">{{ $ekskul->name }}</a>
    </h2>

    {{-- Deskripsi dengan tombol "Selengkapnya" --}}
    @if($ekskul->description)
        <p class="item-description truncated">{{ $ekskul->description }}</p>
        <button class="toggle-btn" style="display: none;">Selengkapnya</button>
    @endif

    {{-- Cek jika ada gambar --}}
    @if(!$ekskul->images->isEmpty())
        <div class="gallery-wrapper">

            {{-- 1. Tampilkan gambar pertama (terbaru) sebagai preview --}}
            <div class="gallery-preview">
                <a href="#" class="gallery-item" data-src="{{ asset('storage/ekskul_images/' . $ekskul->images->first()->image_path) }}" data-alt="{{ $ekskul->images->first()->alt_text }}">
                    <img src="{{ asset('storage/ekskul_images/' . $ekskul->images->first()->image_path) }}" alt="{{ $ekskul->images->first()->alt_text }}">
                </a>
            </div>

            {{-- 2. Container untuk galeri lengkap (paginasi), disembunyikan awalnya --}}
            @if($ekskul->images->count() > 1)
                <div class="image-pagination-container gallery-hidden">
                    {{-- Tombol Navigasi Kiri (Hanya muncul jika gambar > 6) --}}
                    @if($ekskul->images->count() > 6)
                        <button class="page-nav-button prev-page">&#10094;</button>
                    @endif

                    <div class="gallery-images">
                        {{-- Loop semua gambar untuk galeri lengkap --}}
                        @foreach ($ekskul->images as $image)
                            <a href="#" class="gallery-item" data-src="{{ asset('storage/ekskul_images/' . $image->image_path) }}" data-alt="{{ $image->alt_text }}">
                                <img src="{{ asset('storage/ekskul_images/' . $image->image_path) }}" alt="{{ $image->alt_text }}">
                            </a>
                        @endforeach
                    </div>

                    {{-- Tombol Navigasi Kanan & Counter (Hanya muncul jika gambar > 6) --}}
                    @if($ekskul->images->count() > 6)
                        <button class="page-nav-button next-page">&#10095;</button>
                        <div class="page-counter"></div>
                    @endif
                </div>
            @endif

        </div>

        {{-- 3. Tombol "Lihat Semua Gambar" (Hanya muncul jika gambar lebih dari 1) --}}
        @if($ekskul->images->count() > 1)
            <button class="show-more-images-button" data-status="hidden">Lihat Semua Gambar</button>
        @endif
    @endif
</div>
@empty
<div class="col-12 text-center">
    <p>Saat ini belum ada data ekstrakurikuler yang tersedia.</p>
</div>
@endforelse

</section>

{{-- Modal dan Script tetap sama --}}
<div id="imageModal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <div class="modal-title"></div>
        <div class="slider-container">
            <div class="slider-image-wrapper">
                <img id="modalImage" src="" alt="Full size image">
            </div>
            <button class="prev-button">&#10094;</button>
            <button class="next-button">&#10095;</button>
            <div class="image-counter"></div>
        </div>
    </div>
</div>

<script src="{{ asset('/theme') }}/js/kegiatan2.js"></script>

@endsection