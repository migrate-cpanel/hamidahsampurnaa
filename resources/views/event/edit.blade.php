@extends('layout.main')

@section('title', 'Edit Event')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Edit Event</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Form Edit Event</h3>
        </div>
        <form action="{{ route('event.update', $event) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @include('event.form')
        </form>
    </div>
@endsection

@section('script')
    <script>
        tinymce.init({
            selector: 'textarea.tinymce',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
@endsection