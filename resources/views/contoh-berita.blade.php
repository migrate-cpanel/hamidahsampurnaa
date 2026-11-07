@extends('main_blog')

@section('title', $berita->title)

@section('content')

{{-- Pastikan Anda punya file CSS ini atau sesuaikan path-nya --}}
<link rel="stylesheet" href="{{ asset('theme/css/pendidikan.css') }}">

<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">{{ $berita->title }}</h1>
        <nav class="breadcrumb">
            {{-- <a href="/">Home</a> > --}}
            <a href="{{ route('berita') }}">Berita</a> >
            <span>{{ $berita->title }}</span>
        </nav>
    </div>
</section>

<section class="school-life-section">
    <h2 class="main-title">Berita</h2>
    {{-- <p class="intro-text">
        {{ $berita->short_description }}
    </p> --}}
</section>

<div class="article-container">
    <div class="image-wrapper">
        {{-- PERBAIKAN PATH GAMBAR --}}
        <img src="{{ asset('storage/news_images/' . $berita->image) }}" alt="{{ $berita->title }}" class="main-image">
        
        <div class="date-overlay">
            <span class="day-month">{{ \Carbon\Carbon::parse($berita->published_date)->format('d M') }}</span>
            <span class="year">{{ \Carbon\Carbon::parse($berita->published_date)->format('Y') }}</span>
        </div>
    </div>
    <div class="content-wrapper">
        <span class="category-tag">Berita</span>
        
        <p><strong>{{ $berita->short_description }}</strong></p>

        <div class="article-content">
            {!! $berita->content !!}
        </div>

        <p class="credits">
            <strong>Penulis:</strong> {{ $berita->author ?? 'Tim Redaksi' }} | 
            <strong>Editor:</strong> {{ $berita->editor ?? 'Tim Redaksi' }} | 
            <strong>Foto:</strong> {{ $berita->photographer ?? 'Dokumentasi' }}
        </p>
    </div>
</div>

@endsection