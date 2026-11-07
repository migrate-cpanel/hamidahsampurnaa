@extends('layout.main')

@section('title', 'testimonials')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit Data</h1>
        </div>
        <div class="col-sm-6">
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <form action="{{ url('testimonials/edit') }}" method="post" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <div class="ml-auto">
                                    <a href="{{ url('testimonials/index') }}" class="btn btn-default">
                                        <i class="fas fa fa-reply"></i> Kembali </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="content" id="content" class="form-control" rows="3" required>{{ $row->content }}</textarea>
                                    <input type="hidden" name="id" value="{{ $row->id }}">
                                </div>
                                <div class="form-group">
                                    <label>Parent Name</label>
                                    <input type="text" class="form-control" name="parent_name" id="parent_name"
                                        value="{{ $row->parent_name }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Parent Photo</label>
                                    <figure>
                                        <img class="img-thumbnail"
                                            src="{{ url('/img/uploads/' . $row->parent_photo_url ?? '/') }}"
                                            data-holder-rendered="true" style="width: 80px; height: 80px;">
                                    </figure>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="parent_photo_url"
                                            id="parent_photo_url" accept=".jpg,.png">
                                        <label class="custom-file-label" for="exampleInputFile">Browse...</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>

            </form>

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
