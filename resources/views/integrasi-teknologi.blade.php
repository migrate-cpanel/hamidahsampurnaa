@extends('main_blog')

@section('title', 'Integrasi Teknologi')

@section('content')

<link rel="stylesheet" href="{{ asset('/theme') }}/css/pendidikan.css">

<section class="hero-section">
     <div class="hero-content">
         <h1 class="hero-title">Integrasi Teknologi</h1>
         <nav class="breadcrumb">
             <a href="/">Home</a> >
             <span>Integrasi</span>
         </nav>
     </div>
 </section>

  <section class="school-life-section">
     <h2 class="main-title">Integrasi Teknologi</h2>
     <p class="intro-text">
         Mengoptimalkan e-book, smartbook, dan aplikasi digital untuk mendukung pembelajaran di era digital secara bijak.
     </p>
  </section>

<div class="innovation-wrapper">
    <div class="innovation-grid">
        @foreach ($integrasiTeknologis as $item)
            <a href="{{ route('integrasi.detail', ['slug' => $item->slug]) }}" class="card-link">
                <div class="innovation-item">
                    <img src="{{ asset('storage/integrasi_teknologi_images/' . $item->image) }}" alt="{{ $item->title }}">
                    <h3>{{ $item->title }}</h3>
                    <p>{{ $item->short_description }}</p>
                </div>
            </a>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="pagination-controls" style="justify-content: center;">
        {{ $integrasiTeknologis->links() }}
    </div>

</div>

@endsection