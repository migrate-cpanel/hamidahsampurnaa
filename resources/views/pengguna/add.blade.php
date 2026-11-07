@extends('layout.main')

@section('title', 'User')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>User</h1>
        </div>
        <div class="col-sm-6">
        </div>
    </div>
@endsection

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <div class="ml-auto">
                                <h5>Tambah Data</h5>
                            </div>
                        </div>
                        <div class="col mr-auto">
                            <div class="mr-auto float-right">
                                <a href="{{ url('pengguna/index') }}" class="btn btn-default">
                                    << Go Back to List </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <form action="{{ url('pengguna/add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>
                                <div class="form-group">
                                    <label>User Grup</label>
                                    <select name="id_role" id="id_role" class="form-control" required>
                                        @foreach ($role as $dt)
                                            <option value="{{ $dt->id }}">{{ $dt->nama_role }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Admin Photo Url</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="admin_photo_url"
                                            id="admin_photo_url" accept=".jpg,.png" required>
                                        <label class="custom-file-label" for="exampleInputFile">Browse...</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

@endsection


@section('script')

    <script>
        $('.custom-file input').change(function() {
            var $el = $(this),
                files = $el[0].files,
                label = files[0].name;
            if (files.length > 1) {
                label = label + " and " + String(files.length - 1) + " more files"
            }
            $el.next('.custom-file-label').html(label);
        });
    </script>

@endsection
