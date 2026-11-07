@extends('main_blog')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('/theme') }}/css/profil.css">

<main class="main-content-wrapper">
        <section class="rector-hero-section">
            <div class="container-profile hero-content-v2">
                <div class="rektor-profile">
                    <div class="rektor-image-wrapper">
                        <img src="theme/img/Revisi Miss Ryn.jpg" alt="Foto Kepala Yayasan Pendidikan Islam Hamidah Sampurna" class="rektor-photo">
                        <div class="image-overlay"></div>
                    </div>
                    <div class="rector-info">
                        <h2>Ryni Van Ditta, S.T., M.Pd., Gr.</h2>
                        <p class="title">Kepala Yayasan Pendidikan Islam Hamidah Sampurna</p>
                    </div>
                </div>
                <div class="welcome-message-v2">
                    <h3 class="yayasan-title">Ucapan Kepala Yayasan Pendidikan Islam<br>Hamidah Sampurna</h3>
                    <h1 class="main-title">Selamat Datang di <br>Sekolah Hamidah Sampurna</h1>

                    <p>Website ini dirancang untuk menjadi pusat informasi resmi bagi seluruh pemangku kepentingan, mulai dari orang tua, siswa, guru, mitra pendidikan, hingga masyarakat umum. Di dalamnya tersedia informasi lengkap mengenai layanan pendidikan, pengembangan kurikulum, kegiatan sekolah, fasilitas, serta berbagai program unggulan yang dilaksanakan di lingkungan Sekolah Hamidah Sampurna.</p>
                    <p>Sekolah Hamidah Sampurna berkomitmen menjadi lembaga pendidikan Islam modern yang unggul dalam membentuk generasi berkarakter, cerdas, dan adaptif terhadap perkembangan zaman. Dengan mengintegrasikan nilai-nilai Islam, penguatan karakter, pendekatan pembelajaran tematik, serta pemanfaatan teknologi digital, kami percaya bahwa pendidikan adalah kunci membangun peradaban yang lebih baik.</p>
                </div>
            </div>
        </section>

        <section class="university-vision-section">
            <div class="container-profile vision-content-v2">
                <p>Kami juga membuka akses pendidikan berkualitas seluas-luasnya bagi seluruh anak bangsa tanpa membedakan latar belakang sosial, budaya, maupun ekonomi. Dengan semangat rahmatan lil ‘alamin, kami menjunjung tinggi keberagaman sebagai bagian dari kekayaan pembelajaran yang bermakna.</p>
                <p>Kepercayaan masyarakat terhadap Sekolah Hamidah Sampurna tercermin dari pertumbuhan dan sinergi positif di setiap jenjang pendidikan: Playgroup, TK, SD, hingga SMP. Kami terus berbenah dan berinovasi untuk menjadi sekolah pilihan keluarga modern yang Islami dan berwawasan global.</p>

                <p class="closing-quote">"Semoga website ini dapat menjadi jembatan komunikasi yang efektif dan inspiratif antara Sekolah Hamidah Sampurna dengan seluruh pihak yang mendukung terciptanya ekosistem pendidikan yang unggul dan berkelanjutan."</p>
                <p class="rector-signature"><strong>Ryni Van Ditta, S.T., M.Pd., Gr. <br>Kepala Yayasan Pendidikan Islam Hamidah Sampurna</strong></p>
            </div>
        </section>

        <section class="vision-mission-purpose-section">
            <div class="container-profile py-4 py-xl-5">
                <div class="row">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="feature-item d-flex align-items-center mb-5">
                            <div class="icon-wrapper primary-bg d-flex flex-shrink-0 justify-content-center align-items-center me-4">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="text-content">
                                <h4 class="item-title">Visi Yayasan</h4>
                                <ul class="item-list">
                                    <li>Menjadi “Center of Excellence” pendidikan berbasis Islami, ilmu pengetahuan dan teknologi.</li>
                                </ul>
                            </div>
                        </div>

                        <hr class="section-divider">

                        <div class="feature-item d-flex align-items-center flex-row-reverse mb-5">
                            <div class="icon-wrapper primary-bg d-flex flex-shrink-0 justify-content-center align-items-center ms-4">
                                <i class="fas fa-flag"></i>
                            </div>
                            <div class="text-content text-end">
                                <h4 class="item-title">Misi</h4>
                                <ul class="item-list">
                                    <li><span>Membentuk peserta didik yang memiliki keimanan kuat dan mampu mengamalkan ajaran agama Islam dalam kehidupan sehari-hari.</span></li>
                                    <li><span>Mewujudkan karakter peserta didik yang berakhlak mulia, disiplin, dan bertanggung jawab.</span></li>
                                    <li><span>Mengembangkan potensi dan kompetensi peserta didik agar memiliki keterampilan sesuai dengan minat dan bakatnya</span></li>
                                    <li><span>Menciptakan lulusan yang unggul dalam penguasaan ilmu pengetahuan dan teknologi berbasis digital.</span></li>
                                    <li><span>Menyediakan sistem pendidikan yang unggul dengan dukungan sarana prasarana modern dan tenaga pendidik profesional.</span></li>
                                </ul>
                            </div>
                        </div>

                        <hr class="section-divider">

                        <div class="feature-item d-flex align-items-center">
                            <div class="icon-wrapper primary-bg d-flex flex-shrink-0 justify-content-center align-items-center me-4">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <div class="text-content">
                                <h4 class="item-title">Tujuan</h4>
                                <ul class="item-list">
                                    <li>Menghasilkan peserta didik yang religius, memiliki akidah yang kuat, melaksanakan ibadah dengan benar, serta menjadikan nilai-nilai Islam sebagai dasar dalam bersikap dan bertindak.</li>
                                    <li>Membentuk karakter siswa yang berakhlak mulia, memiliki sikap santun, jujur, disiplin, bertanggung jawab, dan mampu menjalin hubungan sosial yang baik dengan lingkungan sekitarnya.</li>
                                    <li>Mengembangkan potensi dan bakat siswa secara optimal, sehingga mereka mampu menjadi individu yang percaya diri, kreatif, dan kompeten dalam bidang yang diminati.</li>
                                    <li>Mencetak lulusan yang adaptif terhadap perkembangan ilmu pengetahuan dan teknologi, serta mampu mengaplikasikan keterampilan digital dalam kehidupan dan pembelajaran.</li>
                                    <li>Mewujudkan lingkungan belajar yang unggul dan kondusif, dengan dukungan fasilitas modern, media pembelajaran yang inovatif, serta tenaga pendidik yang profesional dan berdedikasi tinggi.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery-title-section py-4">
            <div class="container-profile text-center">
                <h4 class="item-title">Struktur Organisasi</h4>
                {{-- <p class="section-description-small">Jelajahi momen-momen istimewa di Sekolah Hamidah Sampurna.</p> --}}
            </div>
        </section>
        <section class="organization-chart-image-section py-5">
    <div class="container-profile">
        <div class="image-wrapper">
            {{-- Cek apakah variabel $struktur ada dan punya gambar --}}
            @if ($struktur && $struktur->image)

                {{-- Jika ada, tampilkan gambar dari hasil upload admin --}}
                <img src="{{ asset('storage/struktur_images/' . $struktur->image) }}" alt="Struktur Organisasi Sekolah Hamidah Sampurna" class="img-fluid organization-chart-img">
            
            @else

                {{-- Jika tidak ada, tampilkan pesan --}}
                <p>Gambar struktur organisasi belum tersedia.</p>

            @endif
        </div>
    </div>
</section>
        <section class="visitasi-section">
    <div class="container-profile text-center py-5">
        <h2 class="section-heading">Visitasi Sekolah</h2>
        <p class="section-description">Tertarik untuk mengetahui lebih lanjut tentang Sekolah Hamidah Sampurna? Yuk, datang dan jadwalkan melalui Visitasi Sekolah!</p>
        <a href="https://wa.me/6287845736686" class="whatsapp-button" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-whatsapp"></i> Hubungi Kami (WhatsApp Chat)
        </a>
        <p class="note mt-3">Hubungi WhatsApp Call Center kami sekarang.</p>
    </div>
</section>
    </main>


@endsection