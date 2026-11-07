@extends('layout.main')
@section('title', 'Detail Berita')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('news.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
        <a href="{{ route('news.edit', $news->id) }}" class="btn btn-warning float-right"><i class="fas fa-edit"></i> Edit Berita Ini</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr><th width="200px">Judul</th><td>{{ $news->title }}</td></tr>
                    <tr><th>Slug (URL)</th><td>{{ $news->slug }}</td></tr>
                    <tr><th>Tanggal Publikasi</th><td>{{ \Carbon\Carbon::parse($news->published_date)->format('d F Y') }}</td></tr>
                    <tr><th>Tempat & Tanggal Upload</th><td>{{ $news->short_description }}</td></tr>
                    <tr><th>Penulis</th><td>{{ $news->author ?? '-' }}</td></tr>
                    <tr><th>Editor</th><td>{{ $news->editor ?? '-' }}</td></tr>
                    <tr><th>Fotografer</th><td>{{ $news->photographer ?? '-' }}</td></tr>
                </table>
            </div>
            <div class="col-md-4">
                <h5>Gambar</h5>
                
                {{-- PERBAIKAN ADA DI BARIS INI --}}
                <img src="{{ asset('storage/news_images/' . $news->image) }}" class="img-fluid img-thumbnail">
            </div>
        </div>
        <hr>
        <h4>Konten Lengkap</h4>
        <div class="p-3 border bg-light">
            {!! nl2br(e($news->content)) !!}
        </div>
    </div>
</div>
@endsection