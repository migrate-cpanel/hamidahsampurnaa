@extends('layout.main')

@section('title', 'Edit Data Integrasi Teknologi')

{{-- ... (section breadcrums) ... --}}
@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit Data Integrasi Teknologi</h1>
        </div>
    </div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('integrasi.admin.update', ['id' => $integrasi->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- ... (semua form-group lain seperti Judul, Deskripsi Singkat, dll) ... --}}
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $integrasi->title }}" required>
            </div>
            <div class="form-group">
                <label for="short_description">Tempat & Tanggal Upload</label>
                <textarea class="form-control" id="short_description" name="short_description" rows="3" required>{{ $integrasi->short_description }}</textarea>
            </div>
            <div class="form-group">
                <label for="content">Konten Lengkap</label>
                <textarea class="form-control" id="content" name="content" rows="10" required>{{ $integrasi->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="published_date">Tanggal Publikasi</label>
                <input type="date" class="form-control" id="published_date" name="published_date" value="{{ $integrasi->published_date }}" required>
            </div>
             {{-- ... (form-group lainnya) ... --}}
            <div class="form-group">
                <label for="image">Gambar</label><br>
                <img src="{{ asset('storage/integrasi_teknologi_images/' . $integrasi->image) }}" alt="Current Image" width="150" class="mb-2">
                <input type="file" class="form-control-file" id="image" name="image">
                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
            </div>
            <div class="form-group">
                <label for="author">Penulis</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ $integrasi->author }}">
            </div>
            <div class="form-group">
                <label for="editor">Editor</label>
                <input type="text" class="form-control" id="editor" name="editor" value="{{ $integrasi->editor }}">
            </div>
            <div class="form-group">
                <label for="photographer">Fotografer</label>
                <input type="text" class="form-control" id="photographer" name="photographer" value="{{ $integrasi->photographer }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('integrasi.admin.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection

{{-- TAMBAHKAN SECTION BARU INI UNTUK MENGAKTIFKAN TINYMCE --}}
@section('script')
<script>
    tinymce.init({
        selector: 'textarea#content',
        plugins: 'code table lists image media link',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | link image media',
        
        // === TAMBAHKAN BARIS INI ===
        // Ini akan secara otomatis menyimpan konten TinyMCE ke dalam textarea asli setiap kali ada perubahan.
        setup: function (editor) {
            editor.on('change', function () {
                tinymce.triggerSave();
            });
        }
        // ============================
    });
</script>
@endsection