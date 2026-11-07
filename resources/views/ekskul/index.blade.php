@extends('layout.main')

@section('title', 'Ekstrakurikuler')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Ekstrakurikuler</h1>
        </div>
    </div>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{ route('ekskul.create') }}" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Ekskul</a>
    </div>
    <div class="card-body">
        <div class="row">
            @if($ekskuls->isEmpty())
                <div class="col-12">
                    <p class="text-center">Belum ada data ekstrakurikuler.</p>
                </div>
            @else
                @foreach ($ekskuls as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold">{{ $item->name }}</h5>
                        </div>
                        <div class="card-body">
                            @if($item->images->isNotEmpty())
                                <img src="{{ asset('storage/ekskul_images/' . $item->images->first()->image_path) }}"
                                     class="img-fluid rounded mb-2"
                                     alt="{{ $item->images->first()->alt_text }}"
                                     style="width: 100%; height: 200px; object-fit: cover;">
                            @else
                                <div class="text-center p-5 bg-light rounded">
                                    <i class="fas fa-image fa-3x text-muted"></i>
                                    <p class="text-muted">Tidak ada gambar</p>
                                </div>
                            @endif
                            <p class="card-text">{{ Str::limit($item->description, 100) }}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('ekskul.show', ['id' => $item->id]) }}" class="btn btn-sm btn-info" title="Detail"><i class="fas fa-eye"></i> Detail</a>
                            <a href="{{ route('ekskul.edit', ['id' => $item->id]) }}" class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-edit"></i> Edit</a>
                            <button onclick="del({{ $item->id }})" class="btn btn-sm btn-danger" title="Hapus"><i class="fas fa-trash"></i> Hapus</button>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
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
                    var url = "{{ route('ekskul.destroy', ':id') }}";
                    url = url.replace(':id', id);
                    window.location.href = url;
                }
            });
        }

        @if (session('add_sukses'))
            Swal.fire('Berhasil!', '{{ session('add_sukses') }}', 'success');
        @endif

        @if (session('edit_sukses'))
             Swal.fire('Berhasil!', '{{ session('edit_sukses') }}', 'success');
        @endif

        @if (session('delete_sukses'))
             Swal.fire('Berhasil!', '{{ session('delete_sukses') }}', 'success');
        @endif
    </script>
@endsection