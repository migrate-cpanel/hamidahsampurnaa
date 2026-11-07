@extends('layout.main')

@section('title', 'Detail Pendidikan')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Detail Data Pendidikan</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('pendidikan.admin.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <a href="{{ route('pendidikan.admin.edit', ['id' => $pendidikan->id]) }}" class="btn btn-warning float-right">
                <i class="fas fa-edit"></i> Edit Data Ini
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tr>
                            <th width="200px">Judul</th>
                            <td>{{ $pendidikan->title }}</td>
                        </tr>
                        <tr>
                            <th>Slug (URL)</th>
                            <td>{{ $pendidikan->slug }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Publikasi</th>
                            <td>{{ \Carbon\Carbon::parse($pendidikan->published_date)->format('d F Y') }}</td>
                        </tr>
                        <tr>
                            <th>Tempat & Tanggal Upload</th>
                            <td>{{ $pendidikan->short_description }}</td>
                        </tr>
                         <tr>
                            <th>Penulis</th>
                            <td>{{ $pendidikan->author ?? '-' }}</td>
                        </tr>
                         <tr>
                            <th>Editor</th>
                            <td>{{ $pendidikan->editor ?? '-' }}</td>
                        </tr>
                         <tr>
                            <th>Fotografer</th>
                            <td>{{ $pendidikan->photographer ?? '-' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <h5>Gambar</h5>
                    <img src="{{ asset('storage/pendidikan_images/' . $pendidikan->image) }}" class="img-fluid img-thumbnail">
                </div>
            </div>

            <hr>
            <h4>Konten Lengkap</h4>
            <div class="p-3 border bg-light">
                {!! nl2br(e($pendidikan->content)) !!}
            </div>
        </div>
    </div>
@endsection