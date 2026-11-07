@extends('layout.main')

@section('title', 'Detail Event')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Detail Event</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Informasi Detail Event</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 200px;">Judul Event</th>
                    <td>{{ $event->title }}</td>
                </tr>
                <tr>
                    <th>Waktu Mulai</th>
                    <td>{{ $event->start_datetime->format('d F Y, H:i') }}</td>
                </tr>
                <tr>
                    <th>Waktu Selesai</th>
                    <td>{{ $event->end_datetime->format('d F Y, H:i') }}</td>
                </tr>
                <tr>
                    <th>Lokasi Event</th>
                    <td>{{ $event->location }}</td>
                </tr>
                <tr>
                    <th>Tempat & Tanggal Upload</th>
                    <td>{{ $event->short_description }}</td>
                </tr>
                <tr>
                    <th>Konten Lengkap</th>
                    <td>{!! $event->content !!}</td>
                </tr>
                <tr>
                    <th>Gambar</th>
                    <td>
                        @if($event->image)
                            <img src="{{ asset('storage/event_images/' . $event->image) }}" alt="Event Image" style="max-width: 400px; height: auto;">
                        @else
                            Tidak ada gambar.
                        @endif
                    </td>
                </tr>
                 <tr>
                    <th>Dibuat Pada</th>
                    <td>{{ $event->created_at->format('d F Y, H:i') }}</td>
                </tr>
                <tr>
                    <th>Diperbarui Pada</th>
                    <td>{{ $event->updated_at->format('d F Y, H:i') }}</td>
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('event.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection