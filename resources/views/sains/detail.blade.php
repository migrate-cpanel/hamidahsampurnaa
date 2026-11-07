@extends('layout.main')

@section('title', 'Detail Sains')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Detail Data Sains</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            {{-- Menggunakan route untuk sains --}}
            <a href="{{ route('sains.admin.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            {{-- Menggunakan variabel $sain dan route untuk sains --}}
            <a href="{{ route('sains.admin.edit', ['id' => $sain->id]) }}" class="btn btn-warning float-right">
                <i class="fas fa-edit"></i> Edit Data Ini
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-bordered">
                        {{-- Mulai dari sini, semua variabel $pendidikan diganti menjadi $sain --}}
                        <tr>
                            <th width="200px">Judul</th>
                            <td>{{ $sain->title }}</td>
                        </tr>
                        <tr>
                            <th>Slug (URL)</th>
                            <td>{{ $sain->slug }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Publikasi</th>
                            <td>{{ \Carbon\Carbon::parse($sain->published_date)->format('d F Y') }}</td>
                        </tr>
                        <tr>
                            <th>Tempat & Tanggal Upload</th>
                            <td>{{ $sain->short_description }}</td>
                        </tr>
                         <tr>
                            <th>Penulis</th>
                            <td>{{ $sain->author ?? '-' }}</td>
                        </tr>
                         <tr>
                            <th>Editor</th>
                            <td>{{ $sain->editor ?? '-' }}</td>
                        </tr>
                         <tr>
                            <th>Fotografer</th>
                            <td>{{ $sain->photographer ?? '-' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <h5>Gambar</h5>
                    {{-- Pastikan path folder gambar sudah benar untuk sains --}}
                    <img src="{{ asset('storage/sain_images/' . $sain->image) }}" class="img-fluid img-thumbnail">
                </div>
            </div>

            <hr>
            <h4>Konten Lengkap</h4>
            <div class="p-3 border bg-light">
                {!! nl2br(e($sain->content)) !!}
            </div>
        </div>
    </div>
@endsection