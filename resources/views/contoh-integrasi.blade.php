@extends('main_blog')

@section('title', $integrasi->title)

@section('content')

<link rel="stylesheet" href="{{ asset('/theme') }}/css/pendidikan.css">

<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">{{ $integrasi->title }}</h1>
        <nav class="breadcrumb">
            <a href="/">Home</a> >
            <a href="{{ route('integrasi.list') }}">Integrasi</a> >
            <span>{{ $integrasi->title }}</span>
        </nav>
    </div>
</section>

<section class="school-life-section">
    <h2 class="main-title">Integrasi Teknologi</h2>
    {{-- <p class="intro-text">
        Meningkatkan minat dan berpikir kritis siswa lewat pendekatan tematik, eksperimen, dan proyek pembelajaran.
    </p> --}}
</section>

<div class="article-container">
    <div class="image-wrapper">
        <img src="{{ asset('storage/integrasi_teknologi_images/' . $integrasi->image) }}" alt="{{ $integrasi->title }}" class="main-image">
        {{-- <img src="{{ asset('/theme') }}/img/clipboard-image.png" alt="Logo shs" class="shs-logo"> --}}

        <div class="date-overlay">
            <span class="day-month">{{ \Carbon\Carbon::parse($integrasi->published_date)->format('d M') }}</span>
            <span class="year">{{ \Carbon\Carbon::parse($integrasi->published_date)->format('Y') }}</span>
        </div>
    </div>
    <div class="content-wrapper">
        <span class="category-tag">Sains</span>
        
        <p><strong>{{ $integrasi->short_description }}</strong></p>

        {{-- Konten Lengkap --}}
        <p>{!! $integrasi->content !!}</p>

        <p class="credits">
            <strong>Penulis:</strong> {{ $integrasi->author ?? 'Tim Redaksi' }} |
            <strong>Editor:</strong> {{ $integrasi->editor ?? 'Tim Redaksi' }} |
            <strong>Foto:</strong> {{ $integrasi->photographer ?? 'Dokumentasi' }}
        </p>
    </div>
</div>

@endsection