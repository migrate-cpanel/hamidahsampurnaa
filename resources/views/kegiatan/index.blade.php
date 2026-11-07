@extends('layout.main')

@section('title', 'Daftar Galeri Kegiatan')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Galeri Kegiatan</h1>
        </div>
        <div class="col-sm-6">
        </div>
    </div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('admin.kegiatan.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Kegiatan Baru</a>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar Terbaru</th> {{-- PERUBAHAN --}}
                    <th>Judul</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kegiatans as $kegiatan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{-- Cek apakah ada gambar, lalu tampilkan yang pertama (yang terbaru) --}}
                        @if(!$kegiatan->images->isEmpty())
                            <img src="{{ asset('storage/kegiatan_images/' . $kegiatan->images->first()->image_path) }}" 
                                alt="{{ $kegiatan->title }}" 
                                style="width: 150px; height: 90px; object-fit: cover; border-radius: 5px;">
                        @else
                            <span class="text-muted">Tidak ada gambar</span>
                        @endif
                    </td>
                    <td>{{ $kegiatan->title }}</td>
                    <td>
                        <a href="{{ route('admin.kegiatan.show', $kegiatan->id) }}" class="btn btn-sm btn-info">Detail</a>
                        <a href="{{ route('admin.kegiatan.edit', $kegiatan->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger" onclick="confirmDelete(event, '{{ route('admin.kegiatan.destroy', $kegiatan->id) }}')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')
<script>
    function confirmDelete(event, url) {
        event.preventDefault();
        Swal.fire({
            title: 'Anda yakin?',
            text: "Data ini akan dihapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
</script>
@endsection