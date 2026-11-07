@extends('layout.main')

@section('title', 'Pendidikan')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Pendidikan</h1>
        </div>
        <div class="col-sm-6">
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            {{-- PERBAIKAN 1: Gunakan route() untuk link Tambah Data --}}
            <a href="{{ route('pendidikan.admin.create') }}" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Data</a>
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
                    @foreach ($pendidikans as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->short_description }}</td>
                            <td>
                                <img src="{{ asset('storage/pendidikan_images/' . $item->image) }}" alt="Foto"
                                     height="50" width="80" style="object-fit: cover;">
                            </td>
                            <td>{{ \Carbon\Carbon::parse($item->published_date)->format('d M Y') }}</td>
                            <td class="text-center">
                                {{-- TOMBOL BARU DITAMBAHKAN DI SINI --}}
                                <a href="{{ route('pendidikan.admin.show', ['id' => $item->id]) }}" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                                
                                <a href="{{ route('pendidikan.admin.edit', ['id' => $item->id]) }}" class="btn btn-xs btn-warning" title="Edit"><i class="fas fa-edit"></i></a>
                                <button onclick="del({{ $item->id }})" class="btn btn-xs btn-danger" title="Hapus"><i class="fas fa-trash"></i></button>
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
                    {{-- PERBAIKAN 3: Gunakan route() untuk link Hapus di JavaScript --}}
                    var url = "{{ route('pendidikan.admin.destroy', ':id') }}";
                    url = url.replace(':id', id);
                    window.location.href = url;
                }
            });
        }
        
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