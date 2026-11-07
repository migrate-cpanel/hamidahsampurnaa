@extends('layout.main')

@section('title', 'Edit Logo Partner')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit Logo Partner</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('logos.admin.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <h5><i class="icon fas fa-ban"></i> Ada Kesalahan!</h5>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('logos.admin.update', $logo->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama Partner (untuk alt text)</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $logo->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tinggi Logo (dalam pixel)</label>
                    <input type="number" class="form-control @error('height') is-invalid @enderror" name="height" value="{{ old('height', $logo->height) }}" min="10" max="200" required>
                     <small class="form-text text-muted">Contoh: 80. Ini akan menentukan ukuran tinggi logo saat ditampilkan.</small>
                    @error('height')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>File Gambar Logo</label>
                    <div class="mb-2">
                        <img src="{{ asset('storage/logo_images/' . $logo->image) }}" alt="Logo saat ini" style="max-height: 100px; background: #f0f0f0; padding: 5px; border-radius: 5px;">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" id="image" accept=".jpg,.jpeg,.png,.svg,.webp">
                        <label class="custom-file-label" for="image">Pilih file baru...</label>
                    </div>
                    <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah gambar logo.</small>
                     @error('image')
                        <div class="text-danger text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#image').on('change', function() {
            var fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').html(fileName);
        });
    </script>
@endsection