@extends('layout.main')

@section('title', 'Event')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Event</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('event.create') }}" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="table1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="20px">No</th>
                        <th>Judul</th>
                        <th>Lokasi Event</th>
                        <th>Gambar</th>
                        <th>Tanggal Mulai</th>
                        <th class="text-center" width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->location }}</td>
                            <td>
                                <img src="{{ asset('storage/event_images/' . $item->image) }}" alt="Foto Event"
                                     height="50" width="80" style="object-fit: cover;">
                            </td>
                            <td>{{ \Carbon\Carbon::parse($item->start_datetime)->format('d M Y, H:i') }}</td>
                            <td class="text-center">
                                <a href="{{ route('event.show', $item) }}" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('event.edit', $item) }}" class="btn btn-xs btn-warning" title="Edit"><i class="fas fa-edit"></i></a>
                                
                                {{-- Form sekarang punya ID unik --}}
                                <form id="delete-form-{{ $item->id }}" action="{{ route('event.destroy', $item) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    {{-- Tombol sekarang memanggil fungsi JavaScript --}}
                                    <button type="button" class="btn btn-xs btn-danger" title="Hapus" onclick="deleteConfirmation({{ $item->id }})">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
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
        @if (session('add_sukses'))
            Swal.fire('Berhasil!', 'Data berhasil ditambahkan.', 'success');
        @endif

        @if (session('edit_sukses'))
              Swal.fire('Berhasil!', 'Data berhasil diperbarui.', 'success');
        @endif

        @if (session('delete_sukses'))
              Swal.fire('Berhasil!', 'Data berhasil dihapus.', 'success');
        @endif

        // === TAMBAHKAN FUNGSI BARU INI ===
        function deleteConfirmation(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika dikonfirmasi, kirim form penghapusan
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>
@endsection