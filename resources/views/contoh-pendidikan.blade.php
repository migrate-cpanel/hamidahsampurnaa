@extends('main_blog')

@section('title', $pendidikan->title) {{-- Judul halaman dinamis --}}

@section('content')

<link rel="stylesheet" href="{{ asset('/theme') }}/css/pendidikan.css">

<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">{{ $pendidikan->title }}</h1>
        <nav class="breadcrumb">
            <a href="/">Home</a> >
            <a href="{{ url('/pendidikan-berbasis-nilai-islam') }}">Pendidikan</a> >
            {{-- Breadcrumb dinamis --}}
            <span>{{ $pendidikan->title }}</span>
        </nav>
    </div>
</section>

<section class="school-life-section">
    <h2 class="main-title">Pendidikan</h2>
    {{-- <p class="intro-text">
        Menanamkan karakter mulia melalui pembiasaan ibadah, akhlak baik, dan cinta Al-Qur’an dalam kehidupan sehari-hari.
    </p> --}}
</section>


<div class="article-container">
    <div class="image-wrapper">
        {{-- Gambar dinamis --}}
        <img src="{{ asset('storage/pendidikan_images/' . $pendidikan->image) }}" alt="{{ $pendidikan->title }}" class="main-image">
        
        {{-- <img src="{{ asset('/theme') }}/img/clipboard-image.png" alt="Logo shs" class="shs-logo"> --}}

        <div class="date-overlay">
            {{-- Tanggal dinamis dari database menggunakan Carbon --}}
            <span class="day-month">{{ \Carbon\Carbon::parse($pendidikan->published_date)->format('d M') }}</span>
            <span class="year">{{ \Carbon\Carbon::parse($pendidikan->published_date)->format('Y') }}</span>
        </div>
    </div>
    <div class="content-wrapper">
        <span class="category-tag">Pendidikan</span>
        
        {{-- ======================================================= --}}
    {{-- === TAMBAHKAN BARIS INI UNTUK DESKRIPSI SINGKAT === --}}
    {{-- ======================================================= --}}
    <p><strong>{{ $pendidikan->short_description }}</strong></p>

    {{-- Ini adalah konten lengkap Anda --}}
    <p>{!! $pendidikan->content !!}</p>

        {{-- Penulis, Editor, dan Foto dinamis --}}
        <p class="credits">
            <strong>Penulis:</strong> {{ $pendidikan->author ?? 'Tim Redaksi' }} | 
            <strong>Editor:</strong> {{ $pendidikan->editor ?? 'Tim Redaksi' }} | 
            <strong>Foto:</strong> {{ $pendidikan->photographer ?? 'Dokumentasi' }}
        </p>
    </div>
</div>

@endsection