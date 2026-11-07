@extends('layout.main')

@section('title', 'Edit Ekstrakurikuler')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit Ekstrakurikuler: {{ $ekskul->name }}</h1>
        </div>
    </div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('ekskul.update', ['id' => $ekskul->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nama Ekstrakurikuler</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $ekskul->name) }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Deskripsi (Opsional)</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $ekskul->description) }}</textarea>
            </div>

            {{-- Tampilan Gambar yang Sudah Ada --}}
            <div class="form-group">
                <label>Gambar Saat Ini</label>
                <div class="row">
                    @forelse ($ekskul->images as $image)
                        <div class="col-md-3 mb-3">
                            <div class="img-container" style="position: relative;">
                                {{-- BUNGKUS <img> DENGAN <a> UNTUK TRIGGER MODAL --}}
                                <a href="#" class="image-thumbnail" data-toggle="modal" data-target="#imageDetailModal" data-src="{{ asset('storage/ekskul_images/' . $image->image_path) }}">
                                    <img src="{{ asset('storage/ekskul_images/' . $image->image_path) }}" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover; cursor: pointer;">
                                </a>
                                
                                {{-- Tombol hapus tetap sama --}}
                                <a href="{{ route('ekskul.image.destroy', ['imageId' => $image->id]) }}"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus gambar ini?')"
                                style="position: absolute; top: 5px; right: 5px;" title="Hapus Gambar">
                                <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p>Tidak ada gambar.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="form-group">
                <label for="images">Tambah Gambar Baru (Bisa pilih lebih dari satu)</label>
                <input type="file" class="form-control-file @error('images') is-invalid @enderror" id="images" name="images[]" multiple>
                <small class="form-text text-muted">Kosongkan jika tidak ingin menambah gambar baru.</small>
                 @error('images')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
                 @error('images.*')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('ekskul.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="imageDetailModal" tabindex="-1" role="dialog" aria-labelledby="imageDetailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageDetailModalLabel">Detail Gambar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img src="" id="modalImage" class="img-fluid" alt="Detail Gambar">
      </div>
    </div>
  </div>
</div>

@section('script')
    {{-- Kode SweetAlert yang sudah ada jangan dihapus --}}
    
    <script>
        // Script untuk Modal Gambar
        $(document).ready(function() {
            $('.image-thumbnail').on('click', function(event) {
                event.preventDefault(); // Mencegah link default
                var imageUrl = $(this).data('src'); // Ambil URL gambar dari atribut data-src
                $('#modalImage').attr('src', imageUrl); // Set URL ke gambar di dalam modal
            });

            // Opsional: bersihkan src gambar saat modal ditutup
            $('#imageDetailModal').on('hidden.bs.modal', function () {
                $('#modalImage').attr('src', '');
            });
        });
    </script>
@endsection

@endsection