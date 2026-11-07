@extends('layout.main')

@section('title', 'Detail Ekstrakurikuler')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Detail: {{ $ekskul->name }}</h1>
        </div>
    </div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h3>{{ $ekskul->name }}</h3>
                <hr>
                <p>
                    {!! nl2br(e($ekskul->description)) !!}
                </p>
                <hr>
                <h5>Galeri Gambar</h5>
                <div class="row mt-3">
                    @forelse ($ekskul->images as $image)
                        <div class="col-md-3 mb-3">
                            <a href="#" class="image-thumbnail" data-toggle="modal" data-target="#imageDetailModal" data-src="{{ asset('storage/ekskul_images/' . $image->image_path) }}">
                                <img src="{{ asset('storage/ekskul_images/' . $image->image_path) }}" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover; cursor: pointer;" alt="{{ $image->alt_text }}">
                            </a>
                        </div>
                    @empty
                        <div class="col-12">
                            <p>Tidak ada gambar untuk ekstrakurikuler ini.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('ekskul.index') }}" class="btn btn-secondary">Kembali</a>
        <a href="{{ route('ekskul.edit', ['id' => $ekskul->id]) }}" class="btn btn-warning float-right">Edit Data Ini</a>
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
    <script>
        $(document).ready(function() {
            $('.image-thumbnail').on('click', function(event) {
                event.preventDefault();
                var imageUrl = $(this).data('src');
                $('#modalImage').attr('src', imageUrl);
            });

            $('#imageDetailModal').on('hidden.bs.modal', function () {
                $('#modalImage').attr('src', '');
            });
        });
    </script>
@endsection

@endsection