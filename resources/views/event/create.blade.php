@extends('layout.main')

@section('title', 'Tambah Event')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Event</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Event</h3>
        </div>
        <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
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