@extends('layout.main')

@section('title', 'Tambah Data Sains')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Data Sains</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('sains.admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- === KODE FORM DIMULAI DI SINI === --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                </div>
                <div class="form-group">
                    <label for="short_description">Tempat & Tanggal Upload</label>
                    <textarea class="form-control" id="short_description" name="short_description" rows="3" required>{{ old('short_description') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="content-editor">Konten Lengkap</label>
                    <textarea class="form-control" id="content-editor" name="content" rows="10">{{ old('content') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="published_date">Tanggal Publikasi</label>
                    <input type="date" class="form-control" id="published_date" name="published_date" value="{{ old('published_date') }}" required>
                </div>
                <hr>
                <h5>Credits (Opsional)</h5>
                <div class="row">
                    <div class="col-md-4"><div class="form-group">
                        <label for="author">Penulis</label>
                        <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}">
                    </div></div>
                    <div class="col-md-4"><div class="form-group">
                        <label for="editor">Editor</label>
                        <input type="text" class="form-control" id="editor" name="editor" value="{{ old('editor') }}">
                    </div></div>
                    <div class="col-md-4"><div class="form-group">
                        <label for="photographer">Fotografer</label>
                        <input type="text" class="form-control" id="photographer" name="photographer" value="{{ old('photographer') }}">
                    </div></div>
                </div>
                {{-- === KODE FORM SELESAI === --}}


                <div class="row mt-4">
                    <div class="col-12">
                        <a href="{{ route('sains.admin.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        tinymce.init({
            selector: 'textarea#content-editor',
            plugins: 'lists link image table code help wordcount',
            toolbar: 'undo redo | blocks | bold italic backcolor | ' +
                     'alignleft aligncenter alignright alignjustify | ' +
                     'bullist numlist outdent indent | removeformat | help',
        });
    </script>
@endsection