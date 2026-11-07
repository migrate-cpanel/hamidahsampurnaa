@extends('main_blog')

@section('title', 'kontak')

@section('content')

 <link rel="stylesheet" href="{{ asset('/theme') }}/css/hamidah-voice.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <main>
     <div class="form-container">

        @if (session('success'))
    <div class="alert-success" style="padding: 15px; text-align:center; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
@endif
        <header>
            <h1>Sampaikan Aspirasimu!</h1>
            <p>Kami percaya setiap aspirasi, ide, dan masukan adalah bagian penting untuk kemajuan Sekolah Hamidah Sampurna. Silakan isi form di bawah ini dengan jujur dan terbuka.</p>
        </header>

        <form action="/kirim-aspirasi" method="POST">
            @csrf

            <div class="form-group">
                <label>Anda adalah:</label>
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" id="siswa" name="peran" value="Siswa" required>
                        <label for="siswa">Siswa</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="orangtua" name="peran" value="Orang Tua">
                        <label for="orangtua">Orang Tua</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap Anda</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap Anda" required>
            </div>

            <div class="form-group" id="grup_nama_siswa" style="display: none;">
                <label for="nama_siswa">Nama Siswa (diisi oleh Orang Tua/Wali)</label>
                <input type="text" id="nama_siswa" name="nama_siswa" placeholder="Masukkan nama siswa">
                
                {{-- PENAMBAHAN: Menampilkan pesan error validasi dari Laravel --}}
                @error('nama_siswa')
                    <div style="color: red; font-size: 0.9em; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Jenjang:</label>
                <div class="radio-group">
                    <div class="radio-option"><input type="radio" id="pg" name="jenjang" value="PG" required><label for="pg">PG</label></div>
                    <div class="radio-option"><input type="radio" id="tk" name="jenjang" value="TK"><label for="tk">TK</label></div>
                    <div class="radio-option"><input type="radio" id="sd" name="jenjang" value="SD"><label for="sd">SD</label></div>
                    <div class="radio-option"><input type="radio" id="smp" name="jenjang" value="SMP"><label for="smp">SMP</label></div>
                </div>
            </div>

            <hr class="divider">

            <div class="form-group">
                <label>Pilih Jalur Penyampaian Aspirasi:</label>
                <div class="radio-group-vertical">
                    <div class="radio-option"><input type="radio" id="kepsek" name="jalur_aspirasi" value="Kepala Sekolah" required><label for="kepsek">Halo Kepala Sekolah</label></div>
                    <div class="radio-option"><input type="radio" id="suara" name="jalur_aspirasi" value="Suara Hamidah Friends"><label for="suara">Suara Hamidah Friends</label></div>
                    <div class="radio-option"><input type="radio" id="bk" name="jalur_aspirasi" value="BK"><label for="bk">Bimbingan dan Konseling (BK)</label></div>
                </div>
            </div>

            <div class="form-group">
                <label>Kategori Aspirasi:</label>
                 <div class="radio-group-vertical">
                    <div class="radio-option"><input type="radio" id="saran" name="kategori_aspirasi" value="Saran / Ide" required><label for="saran">Saran / Ide</label></div>
                    <div class="radio-option"><input type="radio" id="kendala" name="kategori_aspirasi" value="Kendala / Permasalahan"><label for="kendala">Kendala / Permasalahan</label></div>
                    <div class="radio-option"><input type="radio" id="apresiasi" name="kategori_aspirasi" value="Apresiasi / Penghargaan"><label for="apresiasi">Apresiasi / Penghargaan</label></div>
                    <div class="radio-option radio-other">
                        <input type="radio" id="lainnya" name="kategori_aspirasi" value="Lainnya">
                        <label for="lainnya">Yang lain:</label>
                        <input type="text" id="kategori_lainnya" name="kategori_lainnya" class="inline-input">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="aspirasi_detail">Tuliskan Aspirasi, Ide, atau Kendala Anda</label>
                <textarea id="aspirasi_detail" name="aspirasi_detail" rows="6" placeholder="Tuliskan aspirasi Anda di sini..." required></textarea>
            </div>

            <div class="form-group">
                <label>Apakah Anda bersedia untuk pertemuan langsung?</label>
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" id="bersedia" name="pertemuan" value="Ya" required>
                        <label for="bersedia">Ya, saya bersedia</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="tidak_bersedia" name="pertemuan" value="Tidak">
                        <label for="tidak_bersedia">Tidak, cukup tertulis</label>
                    </div>
                </div>
            </div>

            <div class="form-group" id="grup_kontak" style="display: none;">
                <label for="kontak">Nomor HP/WA yang bisa dihubungi</label>
            
                {{-- MODIFIKASI INPUT FIELD KONTAK --}}
                <input type="tel" id="kontak" name="kontak" 
                       placeholder="Contoh: 081234567890"
                       pattern="[0-9]{10,15}"
                       oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                       title="Harap masukkan 10-15 digit nomor HP menggunakan angka saja.">
            
                {{-- PENAMBAHAN: Tampilkan pesan error dari Laravel --}}
                @error('kontak')
                    <div style="color: red; font-size: 0.9em; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="submit-btn">Kirim Aspirasi</button>
        </form>
     </div>
    </main>

    {{-- <footer>
        Copyright &copy; 2025 Sekolah Hamidah Sampurna
    </footer> --}}

    {{-- MODIFIKASI & PENAMBAHAN SCRIPT --}}
    <script>
        // Script untuk menampilkan/menyembunyikan input kondisional
        document.querySelectorAll('input[name="peran"]').forEach(elem => {
            elem.addEventListener("change", function(event) {
                const namaSiswaGroup = document.getElementById('grup_nama_siswa');
                const namaSiswaInput = document.getElementById('nama_siswa');
                if (event.target.value === 'Orang Tua') {
                    namaSiswaGroup.style.display = 'block';
                    namaSiswaInput.required = true; // Jadikan wajib diisi jika Orang Tua dipilih
                } else {
                    namaSiswaGroup.style.display = 'none';
                    namaSiswaInput.required = false; // Tidak wajib jika Siswa dipilih
                }
            });
        });

        document.querySelectorAll('input[name="pertemuan"]').forEach(elem => {
            elem.addEventListener("change", function(event) {
                const kontakGroup = document.getElementById('grup_kontak');
                const kontakInput = document.getElementById('kontak'); // Dapatkan elemen inputnya

                if (event.target.value === 'Ya') {
                    kontakGroup.style.display = 'block';
                    kontakInput.required = true; // PENAMBAHAN: Jadikan input kontak wajib diisi
                } else {
                    kontakGroup.style.display = 'none';
                    kontakInput.required = false; // PENAMBAHAN: Hapus kewajiban mengisi input kontak
                }
             });
        });
        // =============================================================
        // === PENAMBAHAN BARU: Script untuk kategori aspirasi "Lainnya" ===
        // =============================================================
        document.querySelectorAll('input[name="kategori_aspirasi"]').forEach(elem => {
            elem.addEventListener("change", function(event) {
                const kategoriLainnyaInput = document.getElementById('kategori_lainnya');
                if (event.target.value === 'Lainnya') {
                    kategoriLainnyaInput.required = true; // Jadikan wajib diisi
                    kategoriLainnyaInput.focus(); // Langsung fokuskan kursor ke input teks
                } else {
                    kategoriLainnyaInput.required = false; // Hapus kewajiban
                    kategoriLainnyaInput.value = ''; // Bersihkan isinya jika user ganti pilihan
                }
            });
        });

        // PENAMBAHAN: Script untuk menghilangkan notifikasi sukses setelah 5 detik
        const successAlert = document.querySelector('.alert-success');
        if (successAlert) {
            setTimeout(() => {
                successAlert.style.transition = 'opacity 0.5s ease';
                successAlert.style.opacity = '0';
                // Tunggu transisi selesai lalu sembunyikan total elemennya
                setTimeout(() => successAlert.style.display = 'none', 500);
            }, 5000); // 5000 milidetik = 5 detik
        }
    </script>

@endsection