@extends('layout.main')

@section('title', 'Laporan Pengunjung')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Laporan Pengunjung</h1>
        </div>
        <div class="col-sm-6">
            {{-- Breadcrumb bisa ditambahkan di sini jika perlu --}}
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Kunjungan Harian</h3>
        </div>
        <div class="card-body">
            <table id="table1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="20px">No</th>
                        <th>Tanggal</th>
                        <th>Jumlah Kunjungan</th>
                        <th class="text-center" width="100px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($visits as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->visit_date)->translatedFormat('l, d F Y') }}</td>
                            <td>{{ $item->total_visits }}</td>
                            <td class="text-center">
                                <button onclick="del('{{ $item->visit_date }}')" class="btn btn-xs btn-danger" title="Hapus Log Hari Ini">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer clearfix">
            {{ $visits->links() }}
        </div>
    </div>
@endsection

@section('script')
    <script>
        function del(date) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Semua log kunjungan pada tanggal " + date + " akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = "{{ route('visitor.logs.destroy', ':date') }}";
                    url = url.replace(':date', date);
                    window.location.href = url;
                }
            });
        }

        @if (session('delete_sukses'))
            Swal.fire('Berhasil!', 'Data kunjungan berhasil dihapus.', 'success');
        @endif
    </script>
@endsection