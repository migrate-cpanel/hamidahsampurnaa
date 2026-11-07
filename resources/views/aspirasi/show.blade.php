{{-- File: resources/views/aspirasi/show.blade.php --}}

@extends('layout.main')

@section('title', 'Detail Aspirasi')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Detail Aspirasi</h1>
        </div>
    </div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Detail dari <strong>{{ $aspirasi->nama_lengkap }}</strong></h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <dl>
                    <dt>Nama Pengirim</dt>
                    <dd>{{ $aspirasi->nama_lengkap }}</dd>

                    <dt>Peran</dt>
                    <dd>{{ $aspirasi->peran }}</dd>

                    @if($aspirasi->peran == 'Orang Tua')
                    <dt>Nama Siswa</dt>
                    <dd>{{ $aspirasi->nama_siswa ?? '-' }}</dd>
                    @endif

                    <dt>Jenjang</dt>
                    <dd>{{ $aspirasi->jenjang }}</dd>

                    <dt>Tanggal Masuk</dt>
                    <dd>{{ $aspirasi->created_at->format('d F Y, H:i') }}</dd>
                </dl>
            </div>
            <div class="col-md-6">
                <dl>
                    <dt>Jalur Penyampaian</dt>
                    <dd>{{ $aspirasi->jalur_aspirasi }}</dd>

                    <dt>Kategori Aspirasi</dt>
                    <dd>{{ $aspirasi->kategori_aspirasi == 'Lainnya' ? 'Lainnya: ' . $aspirasi->kategori_lainnya : $aspirasi->kategori_aspirasi }}</dd>

                    <dt>Bersedia Bertemu Langsung?</dt>
                    <dd>{{ $aspirasi->pertemuan }}</dd>

                    @if($aspirasi->pertemuan == 'Ya')
                    <dt>Kontak (HP/WA)</dt>
                    <dd>{{ $aspirasi->kontak ?? 'Tidak diisi' }}</dd>
                    @endif
                </dl>
            </div>
        </div>

        <hr>

        <h4>Isi Aspirasi:</h4>
        <div class="p-3" style="background-color: #f8f9fa; border-radius: 5px; border: 1px solid #dee2e6;">
            <p style="white-space: pre-wrap;">{{ $aspirasi->aspirasi_detail }}</p>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('aspirasi.admin.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
    </div>
</div>
@endsection