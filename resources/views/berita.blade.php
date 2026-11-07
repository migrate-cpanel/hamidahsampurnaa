@extends('main_blog')

@section('title', 'berita')

@section('content')

<link rel="stylesheet" href="{{ asset('/theme') }}/css/berita.css">

    {{-- <header class="page-header-image">
        <div class="header-content">
            <h1>Berita</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Berita Terkini</li>
                </ol>
            </nav>
        </div>
    </header> --}}

    <section class="berita-section">
        <div class="container">
            <h2 class="section-title">Berita</h2>
        </div>
    </section>
    
    {{-- Menggunakan struktur dan class dari halaman Pendidikan --}}
<div class="innovation-wrapper">
    <div class="innovation-grid">
        @foreach ($data as $item)
        <a href="{{ route('berita.detail', $item->slug) }}" class="card-link">
            <div class="innovation-item">
                
                {{-- PERBAIKAN PATH GAMBAR --}}
                @if(!empty($item->image))
                    <img src="{{ asset('storage/news_images/' . $item->image) }}" alt="{{ $item->title }}">
                @else
                    <img src="{{ asset('img/empty.png') }}" alt="No Image Available">
                @endif
                
                <h3>{{ $item->title }}</h3>

                {{-- Menggunakan deskripsi singkat agar lebih rapi --}}
                <p>{{ $item->short_description }}</p>

            </div>
        </a>
    @endforeach
    </div>


    {{-- Kontrol untuk pagination (Previous/Next) --}}
    <div class="pagination-controls">
        {{ $data->links() }}
    </div>
</div>
@endsection
