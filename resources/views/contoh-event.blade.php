@extends('main_blog')

@section('title', $event->title) {{-- Judul halaman dinamis --}}

@section('content')
<link rel="stylesheet" href="{{ asset('/theme') }}/css/contoh-event.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">{{ $event->title }}</h1>
        <nav class="breadcrumb">
            <a href="/">Home</a> >
            <a href="{{ route('event.list') }}">Event</a> >
            <span>{{ $event->title }}</span>
        </nav>
    </div>
</section>

<section class="school-life-section">
    <h2 class="main-title">Event</h2>
</section>

<div class="article-container">
    <div class="image-wrapper">
        <img src="{{ asset('storage/event_images/' . $event->image) }}" alt="{{ $event->title }}" class="main-image">
        <div class="date-overlay">
            <span class="day-month">{{ $event->start_datetime->format('d M') }}</span>
            <span class="year">{{ $event->start_datetime->format('Y') }}</span>
        </div>
    </div>
    <div class="content-wrapper">
        <span class="category-tag">Event</span>

        {{-- Deskripsi singkat sebagai paragraf pembuka --}}
        <p><strong>{{ $event->short_description }}</strong></p>

        {{-- Konten lengkap dari database --}}
        <div>{!! $event->content !!}</div>

        <div class="event-info">
            <h2>EVENT INFO :</h2>
            <div class="info-item">
                <i class="fa fa-calendar"></i>
                <span><strong>Start Date:</strong> {{ $event->start_datetime->format('d F Y') }}</span>
            </div>
            <div class="info-item">
                <i class="fa fa-clock-o"></i>
                <span><strong>Start Time:</strong> {{ $event->start_datetime->format('H:i') }}</span>
            </div>
            <div class="info-item">
                <i class="fa fa-calendar"></i>
                <span><strong>End Date:</strong> {{ $event->end_datetime->format('d F Y') }}</span>
            </div>
            <div class="info-item">
                <i class="fa fa-clock-o"></i>
                <span><strong>End Time:</strong> {{ $event->end_datetime->format('H:i') }}</span>
            </div>
            <div class="info-item">
                <i class="fa fa-map-marker"></i>
                <span><strong>Location:</strong> {{ $event->location }}</span>
            </div>
        </div>
    </div>
</div>
@endsection