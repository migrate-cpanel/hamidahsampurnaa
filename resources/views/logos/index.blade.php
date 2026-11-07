@extends('layout.main')

@section('title', 'Kelola Logo Partner')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Kelola Logo Partner</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('logos.admin.create') }}" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Logo</a>
        </div>
        <div class="card-body">
            <table id="table1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="20px">No</th>
                        <th>Nama Partner</th>
                        <th>Logo (Gambar)</th>
                        <th>Tinggi (px)</th>
                        <th class="text-center" width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($logos as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                {{-- 1. Bungkus gambar dengan link anchor <a> untuk trigger modal --}}
                                <a href="#" data-toggle="modal" data-target="#logoModal{{ $item->id }}" title="Perbesar Gambar">
                                    <img src="{{ asset('storage/logo_images/' . $item->image) }}" alt="{{ $item->name }}"
                                         height="{{ $item->height }}" style="max-width: 150px; background: #f0f0f0; padding: 5px; border-radius: 5px;">
                                </a>
                            </td>
                            <td>{{ $item->height }} px</td>
                            <td class="text-center">
                                <a href="{{ route('logos.admin.edit', ['id' => $item->id]) }}" class="btn btn-xs btn-warning"
                                   title="Edit"><i class="fas fa-edit"></i> </a>
                                
                                <button onclick="del({{ $item->id }})" class="btn btn-xs btn-danger" title="Hapus"><i
                                        class="fas fa-trash"></i> </button>
                            </td>
                        </tr>

                        {{-- 2. Tambahkan struktur HTML untuk Modal di sini, di dalam loop --}}
                        <div class="modal fade" id="logoModal{{ $item->id }}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Logo: {{ $item->name }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="{{ asset('storage/logo_images/' . $item->image) }}" 
                                             alt="{{ $item->name }}" style="max-width: 100%;">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                text: "Logo yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = "{{ route('logos.admin.destroy', ':id') }}";
                    url = url.replace(':id', id);
                    window.location.href = url;
                }
            });
        }
        
        @if (session('add_sukses'))
            Swal.fire('Berhasil!', 'Logo berhasil ditambahkan.', 'success');
        @endif

        @if (session('edit_sukses'))
             Swal.fire('Berhasil!', 'Logo berhasil diperbarui.', 'success');
        @endif

        @if (session('delete_sukses'))
             Swal.fire('Berhasil!', 'Logo berhasil dihapus.', 'success');
        @endif
    </script>
@endsection