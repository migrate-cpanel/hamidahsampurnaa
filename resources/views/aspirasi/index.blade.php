{{-- File: resources/views/aspirasi/index.blade.php --}}

@extends('layout.main')

@section('title', 'Laporan Aspirasi')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Laporan Aspirasi</h1>
        </div>
        <div class="col-sm-6">
            {{-- Kosong, karena tidak ada tombol "Tambah Data" --}}
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Aspirasi Masuk</h3>
        </div>
        <div class="card-body">
            <table id="table1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="20px">No</th>
                        <th>Pengirim</th>
                        <th>Peran</th>
                        <th>Kategori</th>
                        <th>Tanggal Masuk</th>
                        <th class="text-center" width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aspirasis as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->peran }}</td>
                            <td>{{ $item->kategori_aspirasi == 'Lainnya' ? $item->kategori_lainnya : $item->kategori_aspirasi }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y H:i') }}</td>
                            <td class="text-center">
                                <a href="{{ route('aspirasi.admin.show', ['id' => $item->id]) }}" class="btn btn-xs btn-info"
                                    title="Lihat Detail"><i class="fas fa-eye"></i> </a>
                                
                                <button onclick="del({{ $item->id }})" class="btn btn-xs btn-danger" title="Hapus"><i
                                        class="fas fa-trash"></i> </button>
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
                    var url = "{{ route('aspirasi.admin.destroy', ':id') }}";
                    url = url.replace(':id', id);
                    window.location.href = url;
                }
            });
        }
        
        @if (session('delete_sukses'))
            Swal.fire('Berhasil!', 'Data berhasil dihapus.', 'success');
        @endif
    </script>
@endsection