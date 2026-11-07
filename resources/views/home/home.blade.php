@extends('layout.main')

@section('title', 'Home')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-12">
            {{-- Breadcrumbs bisa ditambahkan di sini jika perlu --}}
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{-- INI ADALAH BARIS YANG SUDAH DIPERBAIKI --}}
                    <h3>Hai, {{ Auth::user()->name }}</h3>
                    <p>Selamat datang di halaman dashboard!</p>
                </div>
            </div>
        </div>
    </div>

@endsection
