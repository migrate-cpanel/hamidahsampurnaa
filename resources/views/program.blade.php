@extends('main_blog')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('/theme') }}/css/program.css">


 <main class="school-profile">
     
     <section id="visi-misi" class="content-section">
        <h2 class="section-title">VISI & MISI SEKOLAH</h2>
        
        <div class="visi-section">
            <h3 class="subsection-title">Visi Kami</h3>
            <div class="curriculum-item" style="text-align: center; border-left: none; border-top: 5px solid var(--primary-color); background: var(--card-bg); margin: 0 auto; max-width: 900px;">
                <p style="font-size: 1.4rem; font-weight: 500; color: var(--primary-color); font-style: italic; line-height: 1.6; margin: 0;">
                    "Mewujudkan peserta didik berkarakter Islami yang menguasai ilmu pengetahuan dan teknologi serta berdaya saing global."
                </p>
            </div>
        </div>

        <div class="misi-section">
            <h3 class="subsection-title">Misi Kami</h3>
            <div class="card-grid">
                <div class="card">
                    <h4>01. Keimanan Kuat</h4>
                    <p>Melatih peserta didik mengamalkan ajaran agama Islam dalam kehidupan sehari-hari sehingga memiliki keimanan kuat.</p>
                </div>
                
                <div class="card">
                    <h4>02. Karakter Mulia</h4>
                    <p>Membentuk karakter peserta didik yang berakhlak mulia, disiplin, dan bertanggung jawab.</p>
                </div>
                
                <div class="card">
                    <h4>03. Pengembangan Potensi</h4>
                    <p>Mengembangkan potensi dan kompetensi peserta didik agar memiliki keterampilan sesuai dengan minat dan bakatnya.</p>
                </div>
                
                <div class="card">
                    <h4>04. Penguasaan Digital</h4>
                    <p>Menciptakan lulusan yang unggul dalam penguasaan ilmu pengetahuan dan teknologi berbasis digital.</p>
                </div>
                
                <div class="card">
                    <h4>05. Fasilitas & Pendidik Unggul</h4>
                    <p>Menyediakan sistem pendidikan yang unggul dengan dukungan sarana prasarana modern dan tenaga pendidik profesional.</p>
                </div>
            </div>
        </div>
    </section>

        <section id="program" class="content-section">
            <h2 class="section-title">PROGRAM UNGGULAN</h2>

            <div class="program-level">
                <h3 class="subsection-title">PG-TK (Playgroup & Taman Kanak-Kanak)</h3>
                <p class="section-intro">Dirancang untuk mendukung tumbuh kembang anak usia dini secara menyeluruh dalam suasana yang menyenangkan dan aman.</p>
                <div class="card-grid">
                    <div class="card">
                        <h4>Islamic Character Building</h4>
                        <p>Menanamkan nilai Islam melalui pembiasaan ibadah harian, akhlak terpuji, dan cinta Al-Qur’an.</p>
                    </div>
                    <div class="card">
                        <h4>Coding for Kids</h4>
                        <p>Pengenalan logika dan berpikir sistematis melalui kegiatan coding sederhana yang menyenangkan.</p>
                    </div>
                    <div class="card">
                        <h4>Cambridge Learning</h4>
                        <p>Pembelajaran Bahasa Inggris komunikatif melalui lagu, cerita, dan permainan tematik.</p>
                    </div>
                    <div class="card">
                        <h4>Bilingual Class</h4>
                        <p>Pembelajaran dalam dua bahasa (Indonesia & Inggris) untuk membangun kemampuan komunikasi natural.</p>
                    </div>
                     <div class="card">
                        <h4>Technology Based Learning</h4>
                        <p>Pemanfaatan media digital interaktif seperti layar sentuh dan aplikasi edukatif.</p>
                    </div>
                    <div class="card">
                        <h4>Creative Activities</h4>
                        <p>Aktivitas seperti menggambar, kolase, dan prakarya untuk menumbuhkan imajinasi serta motorik.</p>
                    </div>
                    <div class="card">
                        <h4>Fun Classroom Theme</h4>
                        <p>Ruang kelas dengan tema yang berganti sesuai topik untuk pengalaman belajar yang imajinatif.</p>
                    </div>
                    <div class="card">
                        <h4>Comfortable & Smart Classroom</h4>
                        <p>Kelas dengan fasilitas aman, area bermain edukatif, pendingin ruangan, dan perangkat digital.</p>
                    </div>
                    <div class="card">
                        <h4>Monthly Water Play</h4>
                        <p>Kegiatan bermain air bulanan untuk stimulasi sensorik, motorik, dan sosial anak.</p>
                    </div>
                </div>
            </div>

            <div class="program-level">
                <h3 class="subsection-title">SD-SMP (Sekolah Dasar & Menengah Pertama)</h3>
                <p class="section-intro">Membentuk siswa berkarakter Islami, cerdas, kreatif, dan adaptif terhadap teknologi serta tantangan global.</p>
                <div class="card-grid">
                    <div class="card">
                        <h4>Islamic Character Building</h4>
                        <p>Pendidikan karakter Islami menjadi dasar seluruh aktivitas belajar dan pembiasaan ibadah.</p>
                    </div>
                    <div class="card">
                        <h4>Tahfidz Program</h4>
                        <p>Program menghafal Al-Qur’an yang terstruktur, menyenangkan, dan didampingi guru berpengalaman.</p>
                    </div>
                    <div class="card">
                        <h4>Cambridge Module</h4>
                        <p>Pengayaan materi Bahasa Inggris, Matematika, dan Sains berstandar internasional.</p>
                    </div>
                    <div class="card">
                        <h4>Coding Class</h4>
                        <p>Pembelajaran dasar pemrograman untuk menumbuhkan kemampuan berpikir logis, kreatif, dan solutif.</p>
                    </div>
                     <div class="card">
                        <h4>Bilingual Class</h4>
                        <p>Penggunaan dua bahasa (Indonesia & Inggris) dalam PBM untuk membiasakan komunikasi global.</p>
                    </div>
                    <div class="card">
                        <h4>Comfortable & Smart Classroom</h4>
                        <p>Fasilitas modern seperti smart board, perangkat digital, dan desain kelas yang kondusif.</p>
                    </div>
                    <div class="card">
                        <h4>Personalized Learning</h4>
                        <p>Pendekatan pembelajaran yang disesuaikan dengan potensi dan gaya belajar setiap siswa.</p>
                    </div>
                    <div class="card">
                        <h4>Technology Based Learning</h4>
                        <p>Penggunaan smartbook, e-report, dan platform digital Mumtaz untuk kolaborasi siswa, guru, dan orang tua.</p>
                    </div>
                    <div class="card">
                        <h4>Project Based Learning</h4>
                        <p>Metode berbasis proyek untuk meningkatkan pemahaman konsep melalui praktik nyata dan kerja sama.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="fasilitas" class="content-section">
    <h2 class="section-title">FASILITAS SEKOLAH</h2>
    <p class="section-intro">Setiap ruang dan fasilitas dirancang untuk mendukung pengembangan potensi siswa secara holistik, baik dalam aspek kognitif, sosial, emosional, maupun spiritual.</p>
    
    <div class="card-grid facility-grid">
        
        <div class="card">
            <div class="card-image-container">
                <img src="{{ asset('theme/img/fasilitas/Kelas.jpg') }}" alt="Contoh gambar Ruang Kelas yang nyaman dan modern">
            </div>
            <div class="card-content">
                <h4>Ruang Kelas</h4>
                <p>Nyaman, bersih, modern, dan dilengkapi perangkat pembelajaran digital.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-image-container">
                <img src="{{ asset('theme/img/fasilitas/pojok membaca2.jpg') }}" alt="Contoh gambar Pojok Membaca yang kaya buku">
            </div>
            <div class="card-content">
                <h4>Pojok Membaca</h4>
                <p>Menumbuhkan budaya literasi dengan koleksi buku yang beragam dan sesuai usia.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-image-container">
                <img src="{{ asset('theme/img/fasilitas/Auditorium.jpg') }}" alt="Contoh gambar Auditorium sekolah yang luas">
            </div>
            <div class="card-content">
                <h4>Auditorium</h4>
                <p>Ruang serbaguna untuk pentas seni, seminar, dan kegiatan sekolah lainnya.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-image-container">
                <img src="{{ asset('theme/img/fasilitas/Lapangan.jpg') }}" alt="Contoh gambar Lapangan Olahraga outdoor">
            </div>
            <div class="card-content">
                <h4>Lapangan Olahraga</h4>
                <p>Area outdoor untuk pelajaran olahraga, futsal, basket, dan aktivitas fisik lainnya.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-image-container">
                <img src="{{ asset('theme/img/fasilitas/Kolam.jpg') }}" alt="Contoh gambar Kolam Renang anak yang aman">
            </div>
            <div class="card-content">
                <h4>Kolam Renang</h4>
                <p>Fasilitas renang anak yang bersih dan aman untuk pelatihan dan water play.</p>
            </div>
        </div>
        
        <div class="card">
            <div class="card-image-container">
                <img src="{{ asset('theme/img/fasilitas/Kafe1.jpg') }}" alt="Contoh gambar Kafe Siswa yang bersih dan nyaman">
            </div>
            <div class="card-content">
                <h4>Kafe Siswa</h4>
                <p>Ruang makan dan interaksi sosial yang menyediakan makanan bergizi.</p>
            </div>
        </div>
        
        <div class="card">
            <div class="card-image-container">
                <img src="{{ asset('theme/img/fasilitas/Uks.jpg') }}" alt="Contoh gambar ruang UKS">
            </div>
            <div class="card-content">
                 <h4>UKS</h4>
                 <p>Ruang kesehatan dengan perlengkapan medis dasar dan tenaga pendamping.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-image-container">
                <img src="{{ asset('theme/img/fasilitas/Mushola.jpg') }}" alt="Contoh gambar Mushola sekolah">
            </div>
            <div class="card-content">
                 <h4>Mushola</h4>
                 <p>Fasilitas ibadah yang representatif untuk mendukung pembinaan spiritual.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-image-container">
                <img src="{{ asset('theme/img/fasilitas/Podcast1.jpg') }}" alt="Contoh gambar Podcast Room">
            </div>
            <div class="card-content">
                 <h4>Podcast Room</h4>
                 <p>Ruang kreatif untuk mengembangkan keterampilan komunikasi dan literasi digital.</p>
            </div>
        </div>

    </div>
</section>

        <section id="kurikulum" class="content-section">
            <h2 class="section-title">KURIKULUM TERINTEGRASI</h2>
             <p class="section-intro">Menciptakan pengalaman belajar menyeluruh yang membangun intelektual, karakter, dan spiritual peserta didik.</p>
            <div class="curriculum-list">
                <div class="curriculum-item">
                    <h3>Kurikulum Nasional</h3>
                    <p>Menjadi acuan utama penguasaan kompetensi inti dan dasar sesuai standar pemerintah untuk mengembangkan kecerdasan kognitif, sosial, dan emosional siswa.</p>
                </div>
                <div class="curriculum-item">
                    <h3>Modul Cambridge</h3>
                    <p>Sebagai pengayaan dalam mata pelajaran Bahasa Inggris, Matematika, dan Sains untuk memperluas wawasan global, literasi internasional, dan kemampuan berpikir kritis.</p>
                </div>
                <div class="curriculum-item">
                    <h3>Kurikulum Khas Hamidah Sampurna</h3>
                    <p>Dirancang untuk membentuk karakter Islami, kepemimpinan, dan keterampilan abad 21. Kurikulum ini mencakup:</p>
                    <ul>
                        <li>Islamic Character Building & Tahfidz</li>
                        <li>Pembiasaan Ibadah & Akhlak Harian</li>
                        <li>Project-Based Learning</li>
                        <li>Digital & Coding Literacy</li>
                        <li>Penguatan Bilingual dan Public Speaking</li>
                        <li>Pembelajaran Tematik & Kontekstual</li>
                    </ul>
                </div>
            </div>
        </section>

    </main>


@endsection