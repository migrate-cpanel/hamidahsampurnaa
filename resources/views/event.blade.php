@extends('main_blog')

@section('title', 'Event')

@section('content')
<link rel="stylesheet" href="{{ asset('/theme/css/event.css?v=1.1') }}">

<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">Event</h1>
        <nav class="breadcrumb">
            <a href="/">Home</a> >
            <span>Event</span>
        </nav>
    </div>
</section>

<section class="school-life-section">
    <h2 class="main-title">Event</h2>
    <p class="intro-text">
        Sebagai bagian dari upaya mendukung pembentukan karakter dan potensi siswa, Sekolah Hamidah Sampurna secara rutin menghadirkan berbagai kegiatan akademik dan non-akademik yang inspiratif, edukatif, dan menyenangkan. Mulai dari parents meeting, student fair, class meeting, market day, hingga graduation ceremony, setiap event dirancang untuk menumbuhkan kemandirian, kreativitas, dan semangat kolaborasi siswa.
    </p>
</section>

<section class="school-life-section">
    <div class="features-container">
        @forelse ($events as $event)
            <div class="feature-card">
                <a href="{{ route('event.detail', ['slug' => $event->slug]) }}" class="card-image-link">
                    <img src="{{ asset('storage/event_images/' . $event->image) }}" alt="{{ $event->title }}">
                    <div class="date-overlay">
                        <span class="date-day-month">{{ $event->start_datetime->format('d M') }}</span>
                        <span class="date-year">{{ $event->start_datetime->format('Y') }}</span>
                    </div>
                </a>
                <div class="card-content">
                    <h3 class="card-title">
                        <a href="{{ route('event.detail', ['slug' => $event->slug]) }}" class="card-title-link">{{ $event->title }}</a>
                    </h3>
                    <div class="description-wrapper">
                        <p class="card-description">
                            {{ strip_tags($event->content) }}
                        </p>
                    </div>
                    <a href="{{ route('event.detail', ['slug' => $event->slug]) }}" class="btn-read-more">Baca Selengkapnya</a>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center">Tidak ada event yang ditemukan.</p>
            </div>
        @endforelse
    </div>
</section>

{{-- Ganti pagination JavaScript dengan pagination bawaan Laravel --}}
<div class="pagination-controls" style="justify-content: center;">
    {{ $events->links() }}
</div>

@endsection