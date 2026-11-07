@extends('main_blog')

@section('title', 'Beranda')

@section('content')

<link rel="stylesheet" href="{{ asset('/theme') }}/css/kebijakan.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">


<main>
        <section class="hero-section">
            <div class="hero-content">
                <h1>Kebijakan Pendidikan Karakter</h1>
                <p>"Demi terciptanya keamanan dan keselarasan bersama, mari kita junjung tinggi aturan yang berlaku."</p>
            </div>
        </section>

        <section class="content-section">
            <div class="section-title">
                <h2>Kebijakan Sekolah</h2>
                <p>Berikut adalah Kebijakan Sekolah yang berlaku di Sekolah Hamidah Sampurna</p>
            </div>
            
            <div class="document-viewer">
                <div class="viewer-header">
                    <span>Kebijakan Orang Tua / Wali Siswa Sekolah Hamidah Sampurna</span>
                </div>
                <div class="viewer-body policy-list">
                    <ol>
                        <li><b>Menjunjung tinggi visi dan misi Sekolah Islam Terpadu Hamidah Sampurna, serta mendukung penerapan nilai-nilai Islami dalam kehidupan sehari-hari anak.
                            </b> </li>
                        <li><b>Menjalin sinergi aktif antara rumah dan sekolah, termasuk berkomunikasi secara terbuka, menghadiri kegiatan sekolah, dan mengikuti arahan wali kelas atau manajemen.</b></li>
                        <li><b>Mendampingi proses belajar anak di rumah dengan memberi motivasi, bimbingan, dan penguatan atas nilai-nilai disiplin serta akhlak mulia.</b> </li>
                        <li><b>Menjaga nama baik sekolah dalam setiap tindakan, baik secara langsung maupun melalui media sosial, serta tidak menyebarkan informasi yang belum terverifikasi.</b></li>
                        <li><b>Mengikuti aturan berpakaian yang santun dan sesuai dengan adab Islam ketika berada di lingkungan sekolah.</b></li>
                        <li><b>Membayar kewajiban keuangan sekolah sesuai jadwal yang ditentukan dan melalui sistem pembayaran resmi.</b></li>
                        <li><b>Mendukung kegiatan ekstrakurikuler dan pengembangan diri siswa</b></li>
                        <li><b>Menjadi teladan bagi anak-anak dalam berperilaku, berpakaian, dan bertutur kata, baik di rumah maupun di sekolah.</b></li>
                        <li><b>Berkomitmen mencegah dan tidak mentoleransi segala bentuk perundungan (bullying) baik secara fisik, verbal, sosial, maupun digital, serta siap bekerja sama dengan sekolah dalam memberikan pemahaman dan pembinaan kepada anak agar bersikap empati, santun, dan menghormati sesama.</b></li>
                        <li><b>Mendukung penuh segala tata tertib, kebijakan, dan peraturan yang ditetapkan oleh sekolah sebagai bentuk tanggung jawab dan penghormatan terhadap sistem pendidikan yang berlaku.</b></li>
                    </ol>
                </div>
            </div>
        </section>

         {{-- Di dalam file kebijakan-pendidikan-karakter.blade.php --}}

        {{-- ... bagian atas file blade Anda ... --}}

        <div class="document-container">
            <h2 class="document-title">Buku Saku SHS</h2>

            {{-- INI PERUBAHANNYA: Tambahkan atribut data-pdf-url --}}
            <div id="pdf-viewer" data-pdf-url="{{ asset('pdf/Tata Tertib Students Guide Book - SHS.pdf') }}"></div>
        </div>

        {{-- Pastikan Anda juga memuat JS menggunakan helper asset() --}}
        <script src="{{ asset('theme/js/kebijakan.js') }}" type="module"></script>

        {{-- ... bagian bawah file blade Anda ... --}}

        {{-- <section class="content-section-1">
            <div class="section-title-1">
                <h2>BUKU SAKU</h2>
                <p>Berikut adalah Buku Saku yang berlaku di Sekolah Hamidah Sampurna</p>
            </div>

            <div class="document-viewer-1">
                <div class="viewer-header-1">
                    <span>Buku Saku SHS</span>
                </div>
                <div class="viewer-body-1">
                    <embed src="pdf/Tata Tertib Students Guide Book - SHS.pdf" type="application/pdf" class="pdf-embed">
                </div>
            </div>
        </section> --}}
    </main>

        
    <script src="pdfjs/build/pdf.mjs" type="module"></script>

@endsection