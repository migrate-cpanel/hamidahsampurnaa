@extends('main_blog')

@section('title', 'Galeri Kegiatan')

@section('content')

<link rel="stylesheet" href="{{ asset('/theme') }}/css/galerisekolah.css">

<div class="gallery-intro-container-v3">
    <section class="gallery-intro-content-v3">
        <h1>Selamat Datang di Galeri Kegiatan Sekolah Hamidah Sampurna</h1>
        <p>Ruang visual yang merekam jejak semangat, kreativitas, dan kebersamaan seluruh civitas sekolah dalam berbagai momen bermakna. Di halaman ini, Anda dapat melihat dokumentasi kegiatan yang mencerminkan nilai-nilai Islami, pembelajaran aktif, serta suasana positif yang kami bangun setiap harinya.</p>
    </section>
</div>

<section class="gallery-categories">

    @forelse ($kegiatans as $kegiatan)
<div class="category-card">
    <h2>
        <a href="#" class="category-link">{{ $kegiatan->title }}</a>
    </h2>

    <p class="kegiatan-description truncated">{{ $kegiatan->full_description }}</p>
    <button class="toggle-btn" style="display: none;">Selengkapnya</button>

    {{-- Cek jika ada gambar --}}
    @if(!$kegiatan->images->isEmpty())
        <div class="gallery-wrapper">

            {{-- 1. Tampilkan gambar pertama (terbaru) sebagai preview --}}
            <div class="gallery-preview">
                <a href="#" class="gallery-item" data-src="{{ asset('storage/kegiatan_images/' . $kegiatan->images->first()->image_path) }}" data-alt="{{ $kegiatan->images->first()->alt_text }}">
                    <img src="{{ asset('storage/kegiatan_images/' . $kegiatan->images->first()->image_path) }}" alt="{{ $kegiatan->images->first()->alt_text }}">
                </a>
            </div>

            {{-- 2. Container untuk galeri lengkap (paginasi), disembunyikan awalnya --}}
            {{-- Kita tetap siapkan container ini meskipun gambar < 6 agar JS lebih mudah --}}
            @if($kegiatan->images->count() > 1)
                <div class="image-pagination-container gallery-hidden">
                    @if($kegiatan->images->count() > 6)
                        <button class="page-nav-button prev-page">&#10094;</button>
                    @endif

                    <div class="gallery-images">
                        @foreach ($kegiatan->images as $image)
                            <a href="#" class="gallery-item" data-src="{{ asset('storage/kegiatan_images/' . $image->image_path) }}" data-alt="{{ $image->alt_text }}">
                                <img src="{{ asset('storage/kegiatan_images/' . $image->image_path) }}" alt="{{ $image->alt_text }}">
                            </a>
                        @endforeach
                    </div>

                    @if($kegiatan->images->count() > 6)
                        <button class="page-nav-button next-page">&#10095;</button>
                        <div class="page-counter"></div>
                    @endif
                </div>
            @endif

        </div>

        {{-- 3. Tombol untuk menampilkan/menyembunyikan galeri lengkap --}}
        @if($kegiatan->images->count() > 1)
            <button class="show-more-images-button" data-status="hidden">Lihat Semua Gambar</button>
        @endif
    @endif
</div>
@empty
<div class="col-12 text-center">
    <p>Saat ini belum ada data kegiatan yang tersedia.</p>
</div>
@endforelse


</section>

{{-- Modal untuk Pop-up Gambar --}}
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

{{-- Memuat script yang sudah ada dan script baru untuk tombol "Selengkapnya" --}}
{{-- <script src="{{ asset('/theme') }}/js/galerisekolah.js"></script> --}}
<script src="{{ asset('/theme') }}/js/kegiatan.js"></script>

@endsection