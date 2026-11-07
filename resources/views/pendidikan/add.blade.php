@extends('layout.main')

@section('title', 'Tambah Pendidikan')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Data Pendidikan</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('pendidikan.admin.index') }}" class="btn btn-secondary">
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

            <form action="{{ route('pendidikan.admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Field Judul, Deskripsi Singkat, dll. (Tidak berubah) --}}
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required>
                    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label>Tempat & Tanggal Upload</label>
                    <textarea name="short_description" class="form-control @error('short_description') is-invalid @enderror" rows="3" required>{{ old('short_description') }}</textarea>
                    @error('short_description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                {{-- =============================================== --}}
                {{-- === PERUBAHAN UTAMA ADA DI TEXTAREA INI === --}}
                {{-- =============================================== --}}
                <div class="form-group">
                    <label>Konten Lengkap (untuk halaman detail)</label>
                    {{-- 1. BERI ID PADA TEXTAREA INI --}}
                    <textarea name="content" id="content-editor" class="form-control @error('content') is-invalid @enderror" rows="10">{{ old('content') }}</textarea>
                    @error('content')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                {{-- =============================================== --}}


                {{-- Field Tanggal, Penulis, dll. (Tidak berubah) --}}
                <div class="form-group">
                    <label>Tanggal Publikasi</label>
                    <input type="date" class="form-control @error('published_date') is-invalid @enderror" name="published_date" value="{{ old('published_date') }}" required>
                    @error('published_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Penulis (Author)</label>
                            <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author') }}">
                             @error('author')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Editor</label>
                            <input type="text" class="form-control @error('editor') is-invalid @enderror" name="editor" value="{{ old('editor') }}">
                             @error('editor')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Fotografer</label>
                            <input type="text" class="form-control @error('photographer') is-invalid @enderror" name="photographer" value="{{ old('photographer') }}">
                             @error('photographer')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" id="image" accept=".jpg,.jpeg,.png" required>
                        <label class="custom-file-label" for="image">Pilih file...</label>
                    </div>
                    @error('image')<div class="text-danger text-sm mt-1">{{ $message }}</div>@enderror
                </div>

                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
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

    {{-- =============================================== --}}
    {{-- === 2. TAMBAHKAN KODE TINYMCE DI SINI === --}}
    {{-- =============================================== --}}
    <script>
        tinymce.init({
            selector: 'textarea#content-editor',
            plugins: 'code table lists image link wordcount',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | image | link'
        });
    </script>
@endsection