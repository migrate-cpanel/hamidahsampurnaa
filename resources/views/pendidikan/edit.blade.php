@extends('layout.main')

@section('title', 'Edit Pendidikan')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit Data Pendidikan</h1>
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
            <form action="{{ route('pendidikan.admin.update', ['id' => $pendidikan->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Field Judul, Deskripsi, dll. (Tidak berubah) --}}
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="title" value="{{ $pendidikan->title }}" required>
                </div>
                <div class="form-group">
                    <label>Tempat & Tanggal Upload</label>
                    <textarea name="short_description" class="form-control" rows="3" required>{{ $pendidikan->short_description }}</textarea>
                </div>

                {{-- =============================================== --}}
                {{-- === PERUBAHAN UTAMA ADA DI TEXTAREA INI === --}}
                {{-- =============================================== --}}
                <div class="form-group">
                    <label>Konten Lengkap</label>
                    {{-- 1. BERI ID PADA TEXTAREA INI --}}
                    <textarea name="content" id="content-editor" class="form-control" rows="10">{{ $pendidikan->content }}</textarea>
                </div>
                {{-- =============================================== --}}
                
                {{-- Field Tanggal, Penulis, Gambar, dll. (Tidak berubah) --}}
                <div class="form-group">
                    <label>Tanggal Publikasi</label>
                    <input type="date" class="form-control" name="published_date" value="{{ $pendidikan->published_date }}" required>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Penulis (Author)</label>
                            <input type="text" class="form-control" name="author" value="{{ $pendidikan->author }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Editor</label>
                            <input type="text" class="form-control" name="editor" value="{{ $pendidikan->editor }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Fotografer</label>
                            <input type="text" class="form-control" name="photographer" value="{{ $pendidikan->photographer }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Gambar Saat Ini</label><br>
                    <img src="{{ asset('storage/pendidikan_images/' . $pendidikan->image) }}" width="200px" class="img-thumbnail">
                </div>
                <div class="form-group">
                    <label>Ganti Gambar (Opsional)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image" accept=".jpg,.jpeg,.png">
                        <label class="custom-file-label" for="image">Pilih file...</label>
                    </div>
                    <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
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