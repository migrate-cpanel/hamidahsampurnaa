@extends('main_blog')

@section('title', 'Sains dan Pengetahuan Modern')

@section('content')

{{-- Anda bisa menggunakan CSS yang sama dari pendidikan jika desainnya mirip --}}
<link rel="stylesheet" href="{{ asset('/theme') }}/css/pendidikan.css">

<section class="hero-section" > 
    <div class="hero-content">
        <h1 class="hero-title">Sains dan Pengetahuan Modern</h1>
        <nav class="breadcrumb">
            <a href="/">Home</a> >
            <span>Sains</span>
        </nav>
    </div>
</section>

<section class="school-life-section">
    <h2 class="main-title">Sains</h2>
    <p class="intro-text">
        Meningkatkan minat dan berpikir kritis siswa lewat pendekatan tematik, eksperimen, dan proyek pembelajaran.
    </p>
</section>

<div class="innovation-wrapper">
    <div class="innovation-grid">
        @forelse ($sains as $item)
            <a href="{{ route('sains.public.detail', ['sain' => $item->slug]) }}" class="card-link">
                <div class="innovation-item">
                    <img src="{{ asset('storage/sain_images/' . $item->image) }}" alt="{{ $item->title }}">
                    <h3>{{ $item->title }}</h3>
                    <p>{{ $item->short_description }}</p>
                </div>
            </a>
        @empty
            <p>Belum ada artikel sains yang dipublikasikan.</p>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="pagination-controls" style="justify-content: center; margin-top: 2rem;">
        {{ $sains->links() }}
    </div>
</div>

@endsection