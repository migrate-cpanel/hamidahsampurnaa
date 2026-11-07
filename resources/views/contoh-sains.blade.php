@extends('main_blog')

@section('title', $sain->title)

@section('content')

{{-- Anda bisa menggunakan CSS yang sama dari pendidikan jika desainnya mirip --}}
<link rel="stylesheet" href="{{ asset('/theme') }}/css/pendidikan.css">

<section class="hero-section"> 
    <div class="hero-content">
        <h1 class="hero-title">{{ $sain->title }}</h1>
        <nav class="breadcrumb">
            <a href="/">Home</a> >
            <a href="{{ route('sains.public.index') }}">Sains</a> >
            <span>{{ $sain->title }}</span>
        </nav>
    </div>
</section>

<section class="school-life-section">
    <h2 class="main-title">Sains</h2>
    {{-- <p class="intro-text">
        Meningkatkan minat dan berpikir kritis siswa lewat pendekatan tematik, eksperimen, dan proyek pembelajaran.
    </p> --}}
</section>

<div class="article-container">
    <div class="image-wrapper">
        <img src="{{ asset('storage/sain_images/' . $sain->image) }}" alt="{{ $sain->title }}" class="main-image">
        {{-- <img src="{{ asset('/theme') }}/img/clipboard-image.png" alt="Logo shs" class="shs-logo"> --}}

        <div class="date-overlay">
            <span class="day-month">{{ \Carbon\Carbon::parse($sain->published_date)->format('d M') }}</span>
            <span class="year">{{ \Carbon\Carbon::parse($sain->published_date)->format('Y') }}</span>
        </div>
    </div>
    <div class="content-wrapper">
        <span class="category-tag">Sains</span>
        
        {{-- Deskripsi Singkat --}}
        <p><strong>{{ $sain->short_description }}</strong></p>

        {{-- Konten Lengkap --}}
        <p>{!! $sain->content !!}</p>

        <p class="credits">
            <strong>Penulis:</strong> {{ $sain->author ?? 'Tim Redaksi' }} |
            <strong>Editor:</strong> {{ $sain->editor ?? 'Tim Redaksi' }} |
            <strong>Foto:</strong> {{ $sain->photographer ?? 'Dokumentasi' }}
        </p>
    </div>
</div>
@endsection