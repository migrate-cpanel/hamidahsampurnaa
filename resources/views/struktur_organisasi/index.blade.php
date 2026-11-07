@extends('layout.main')

@section('title', 'Kelola Gambar Struktur Organisasi')

@section('breadcrums')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Kelola Gambar Struktur Organisasi</h1>
        </div>
    </div>
@endsection

@section('content')
{{-- ============================================= --}}
{{-- === TAMBAHKAN BLOK CSS INI UNTUK RESPONSIVE === --}}
{{-- ============================================= --}}
<style>
    /* Membuat container gambar memiliki lebar maksimal dan berada di tengah */
    .responsive-container {
        max-width: 800px; /* Lebar maksimal di layar besar */
        margin-left: auto;
        margin-right: auto;
    }

    /* Membuat gambar fleksibel dan responsif */
    .responsive-img {
        width: 100%; /* Lebar gambar selalu 100% dari container-nya */
        height: auto; /* Tinggi menyesuaikan secara otomatis */
        border: 1px solid #ddd;
        padding: 5px;
        border-radius: 5px;
    }
</style>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Gambar Struktur Organisasi Saat Ini</h3>
        </div>
        <div class="card-body">
            @if ($struktur)
                {{-- JIKA GAMBAR SUDAH ADA --}}
                {{-- PERHATIKAN PERUBAHAN CLASS DI SINI --}}
                <div class="text-center mb-4 responsive-container">
                    <p>Ini adalah gambar yang sedang ditampilkan di halaman depan.</p>
                    {{-- HAPUS STYLE INLINE DAN GANTI DENGAN CLASS --}}
                    <img src="{{ asset('storage/struktur_images/' . $struktur->image) }}" alt="Struktur Organisasi"
                         class="responsive-img">
                </div>

                <hr>

                {{-- FORM UNTUK UPDATE/GANTI GAMBAR --}}
                <form action="{{ route('struktur.admin.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Ganti Gambar Struktur Organisasi</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" required>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">Upload gambar baru untuk menggantikan yang lama. Tipe file: JPG, PNG, GIF. Maks: 2MB.</small>
                    </div>
                    <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i> Ganti Gambar</button>
                    <button type="button" onclick="del({{ $struktur->id }})" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus Gambar</button>
                </form>

            @else
                {{-- JIKA GAMBAR BELUM ADA --}}
                <div class="text-center">
                    <p>Belum ada gambar struktur organisasi yang diunggah.</p>
                </div>
                 {{-- FORM UNTUK UPLOAD GAMBAR BARU --}}
                <form action="{{ route('struktur.admin.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Unggah Gambar Struktur Organisasi</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" required>
                         @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">Tipe file: JPG, PNG, GIF. Maks: 2MB.</small>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Unggah Gambar</button>
                </form>
            @endif
        </div>
    </div>
@endsection

@section('script')
    <script>
        function del(id) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Gambar yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = "{{ route('struktur.admin.destroy', ':id') }}";
                    url = url.replace(':id', id);
                    window.location.href = url;
                }
            });
        }
        
        @if (session('sukses'))
            Swal.fire('Berhasil!', '{{ session('sukses') }}', 'success');
        @endif
    </script>
@endsection