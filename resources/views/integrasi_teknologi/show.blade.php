@extends('layout.main')

{{-- PERUBAHAN 1: Mengganti Judul Halaman --}}
@section('title', 'Detail Integrasi Teknologi')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            {{-- PERUBAHAN 2: Mengganti Header --}}
            <h1>Detail Data Integrasi Teknologi</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            {{-- PERUBAHAN 3: Mengarahkan route 'kembali' ke index integrasi --}}
            <a href="{{ route('integrasi.admin.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            {{-- PERUBAHAN 4: Mengarahkan route 'edit' ke edit integrasi --}}
            <a href="{{ route('integrasi.admin.edit', ['id' => $integrasi->id]) }}" class="btn btn-warning float-right">
                <i class="fas fa-edit"></i> Edit Data Ini
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-bordered">
                        {{-- PERUBAHAN 5: Menggunakan variabel $integrasi (bukan $pendidikan lagi) --}}
                        <tr>
                            <th width="200px">Judul</th>
                            <td>{{ $integrasi->title }}</td>
                        </tr>
                        <tr>
                            <th>Slug (URL)</th>
                            <td>{{ $integrasi->slug }}</td>
                        </tr>
                        <tr>
                            <th>Tempat & Tanggal Upload</th>
                            <td>{{ \Carbon\Carbon::parse($integrasi->published_date)->format('d F Y') }}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi Singkat</th>
                            <td>{{ $integrasi->short_description }}</td>
                        </tr>
                         <tr>
                            <th>Penulis</th>
                            <td>{{ $integrasi->author ?? '-' }}</td>
                        </tr>
                         <tr>
                            <th>Editor</th>
                            <td>{{ $integrasi->editor ?? '-' }}</td>
                        </tr>
                         <tr>
                            <th>Fotografer</th>
                            <td>{{ $integrasi->photographer ?? '-' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <h5>Gambar</h5>
                    {{-- PERUBAHAN 6: Mengganti path folder gambar --}}
                    <img src="{{ asset('storage/integrasi_teknologi_images/' . $integrasi->image) }}" class="img-fluid img-thumbnail">
                </div>
            </div>

            <hr>
            <h4>Konten Lengkap</h4>
            <div class="p-3 border bg-light">
                {!! nl2br(e($integrasi->content)) !!}
            </div>
        </div>
    </div>
@endsection