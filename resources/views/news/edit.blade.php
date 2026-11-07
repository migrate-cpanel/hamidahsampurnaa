@extends('layout.main')
@section('title', 'Edit Berita')

@section('content')
<div class="row">
    <div class="col-md-8">
        {{-- Tag <form> dimulai di sini --}}
        <form action="{{ route('news.update', $news->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST') {{-- Sesuaikan dengan method di route Anda, bisa POST atau PUT --}}
            
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('news.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $news->title) }}" required>
                        @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label>Tempat & Tanggal Upload</label>
                        <textarea name="short_description" class="form-control @error('short_description') is-invalid @enderror" rows="3" required>{{ old('short_description', $news->short_description) }}</textarea>
                        @error('short_description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label>Konten Lengkap</label>
                        <textarea name="content" id="myeditor" class="form-control @error('content') is-invalid @enderror" rows="10">{{ old('content', $news->content) }}</textarea>
                        @error('content')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Publikasi</label>
                                <input type="date" class="form-control @error('published_date') is-invalid @enderror" name="published_date" value="{{ old('published_date', $news->published_date) }}" required>
                                @error('published_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                             <div class="form-group">
                                <label>Ganti Gambar (Opsional, Maks 5MB)</label>
                                <div class="mb-2">
                                    <img src="{{ asset('storage/news_images/' . $news->image) }}" height="80" alt="Gambar saat ini">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" id="image">
                                    <label class="custom-file-label" for="image">Pilih file baru...</label>
                                </div>
                                @error('image')<div class="text-danger mt-1">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-4">
                             <div class="form-group">
                                <label>Penulis (Opsional)</label>
                                <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author', $news->author) }}">
                             </div>
                        </div>
                         <div class="col-md-4">
                             <div class="form-group">
                                <label>Editor (Opsional)</label>
                                <input type="text" class="form-control @error('editor') is-invalid @enderror" name="editor" value="{{ old('editor', $news->editor) }}">
                             </div>
                        </div>
                         <div class="col-md-4">
                             <div class="form-group">
                                <label>Fotografer (Opsional)</label>
                                <input type="text" class="form-control @error('photographer') is-invalid @enderror" name="photographer" value="{{ old('photographer', $news->photographer) }}">
                             </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        {{-- Tag </form> berakhir di sini, membungkus semua elemen --}}
        </form>
    </div>
</div>
@endsection

@section('script')
    {{-- <script src="https://cdn.tiny.cloud/1/ed2g2cqy88n02ce6muzbj3ehxautstpqrw6a1zhsnblg46cs/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}

<script>
    // Skrip untuk nama file
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    // Skrip untuk TinyMCE
    tinymce.init({
      selector: '#myeditor',
      plugins: 'code table lists image media link',
      toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | image media link'
    });
</script>
@endsection