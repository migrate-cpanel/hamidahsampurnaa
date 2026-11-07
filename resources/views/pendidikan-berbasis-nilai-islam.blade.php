@extends('main_blog')

@section('title', 'Pendidikan')

@section('content')

<link rel="stylesheet" href="{{ asset('/theme') }}/css/pendidikan.css">

<section class="hero-section">
     <div class="hero-content">
         <h1 class="hero-title">Pendidikan Berbasis Nilai Islam</h1>
         <nav class="breadcrumb">
             <a href="/">Home</a> >
             <span>Pendidikan</span>
         </nav>
     </div>
 </section>

  <section class="school-life-section">
     <h2 class="main-title">Pendidikan</h2>
     <p class="intro-text">
         Menanamkan karakter mulia melalui pembiasaan ibadah, akhlak baik, dan cinta Al-Qur’an dalam kehidupan sehari-hari.
     </p>
  </section>

<div class="innovation-wrapper">
    <div class="innovation-grid">
        @foreach ($pendidikans as $pendidikan)
            <a href="{{ route('pendidikan.detail', ['pendidikan' => $pendidikan->slug]) }}" class="card-link">
                <div class="innovation-item">
                    <img src="{{ asset('storage/pendidikan_images/' . $pendidikan->image) }}" alt="{{ $pendidikan->title }}">
                    <h3>{{ $pendidikan->title }}</h3>
                    <p>{{ $pendidikan->short_description }}</p>
                </div>
            </a>
        @endforeach
    </div>

    {{-- Ini adalah satu-satunya kode yang dibutuhkan untuk pagination --}}
    <div class="pagination-controls" style="justify-content: center;">
        {{ $pendidikans->links() }}
    </div>

</div>

@endsection