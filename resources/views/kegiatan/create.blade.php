@extends('layout.main')
@section('title', 'Tambah Kegiatan Baru')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Form Tambah Kegiatan</h3>
    </div>
    <form action="{{ route('admin.kegiatan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Judul Kegiatan</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul" required>
            </div>
           
            <div class="form-group">
                <label for="full_description">Deskripsi Lengkap</label>
                <textarea class="form-control" id="full_description" name="full_description" rows="6" placeholder="Deskripsi lengkap yang tampil setelah klik 'Selengkapnya'..." required></textarea>
            </div>
            <div class="form-group">
                <label for="images">Gambar-gambar (bisa pilih lebih dari satu)</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="images" name="images[]" multiple required>
                        <label class="custom-file-label" for="images">Pilih file</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.kegiatan.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

@endsection

@section('script')
<script>
    // Script untuk menampilkan nama file pada custom file input
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var files = e.target.files;
        var fileNames = [];
        for (var i = 0; i < files.length; i++) {
            fileNames.push(files[i].name);
        }
        var label = document.querySelector('.custom-file-label');
        if (fileNames.length > 0) {
            label.textContent = fileNames.join(', ');
        } else {
            label.textContent = 'Pilih file';
        }
    });
</script>
@endsection