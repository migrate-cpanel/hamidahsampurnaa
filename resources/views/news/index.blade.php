@extends('layout.main')
@section('title', 'Berita')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Berita</h1>
        </div>
    </div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('news.create') }}" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">
        <table id="table1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width="20px">No</th>
                    <th>Judul</th>
                    <th>Tempat & Tanggal Upload</th>
                    <th>Gambar</th>
                    <th>Tanggal Publikasi</th>
                    <th class="text-center" width="150px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->short_description }}</td>
                        <td>
                            <img src="{{ asset('storage/news_images/' . $item->image) }}" alt="Foto"
                                 height="50" width="80" style="object-fit: cover;">
                        </td>
                        <td>{{ \Carbon\Carbon::parse($item->published_date)->format('d M Y') }}</td>
                        <td class="text-center">
                            <a href="{{ route('news.show', $item->id) }}" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('news.edit', $item->id) }}" class="btn btn-xs btn-warning" title="Edit"><i class="fas fa-edit"></i></a>
                            <button onclick="del({{ $item->id }})" class="btn btn-xs btn-danger" title="Hapus"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $data->links() }}
        </div>
    </div>
</div>
@endsection

{{-- BAGIAN PENTING ADA DI SINI --}}
@section('script')
    <script>
        function del(id) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Pastikan route ini benar sesuai file web.php Anda
                    var url = "{{ route('news.delete', ':id') }}"; 
                    url = url.replace(':id', id);
                    window.location.href = url;
                }
            });
        }
        
        // Notifikasi setelah aksi berhasil (opsional, tapi bagus untuk ada)
        @if (session('add_sukses'))
            Swal.fire('Berhasil!', 'Data berhasil ditambahkan.', 'success');
        @endif

        @if (session('edit_sukses'))
            Swal.fire('Berhasil!', 'Data berhasil diperbarui.', 'success');
        @endif

        @if (session('delete_sukses'))
            Swal.fire('Berhasil!', 'Data berhasil dihapus.', 'success');
        @endif
    </script>
@endsection