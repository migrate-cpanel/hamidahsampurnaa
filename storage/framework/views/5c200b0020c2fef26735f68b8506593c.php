

<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>

 <link rel="stylesheet" href="<?php echo e(asset('/theme')); ?>/css/beranda.css">
    <link rel="stylesheet" href="<?php echo e(asset('/theme')); ?>/css/counter.css">

    <style>
    /* Mengatur ukuran gambar slider di Bootstrap Carousel */
    /* #carouselExampleControls .carousel-item img {
        width: 100%;
        max-height: 115vh;
        object-fit: cover;
        object-position: bottom; 
    }
    @media (max-width: 768px) {
    #carouselExampleControls .carousel-item img {
        width: 100%;
        max-height: 115vh;
        object-fit: cover;
        object-position: bottom; 
    }
}
@media (max-width: 360px) {
    #carouselExampleControls .carousel-item img {
        width: 100%;
        max-height: 115vh;
        object-fit: cover;
        object-position: bottom; 
    }
} */
</style>

   <header class="bg-primary-gradient">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

        <div class="carousel-inner">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php if($loop->first): ?> active <?php endif; ?>">
                    <img class="d-block w-100" src="<?php echo e(url('/img/uploads/' . $item->image_url ?? '/')); ?>" alt="Slider Image">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php if(count($sliders) > 1): ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        <?php endif; ?>
    </div>
</header>
     <div class="top-strip ">	 	 </div>


<section class="school-life-section-1">
        <h2 class="main-title-1">Akademik</h2>

</section>


  <section class="akademik-section ">
    <div class="akademik-header">


      
    </div>

    <div class="akademik-grid">
      <!-- Kartu 1 -->
      <div class="akademik-card">
        <div class="shield-icon">
          <div class=" justify-content-center align-items-center bs-icon-md bs-icon-rounded bs-icon-primary d-inline-block mb-3 bs-icon" style="background: #6b479e; text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" height="60" width="50" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M622.3 153.2L343.4 67.5c-15.2-4.7-31.6-4.7-46.8 0L17.7 153.2c-23.5 7.2-23.5 38.4 0 45.6l48.6 14.9c-10.7 13.2-17.2 29.3-17.9 46.9C38.8 266.2 32 276.1 32 288c0 10.8 5.7 19.9 13.9 25.7L20.3 428.5C18.1 438.5 25.7 448 35.9 448h56.1c10.2 0 17.8-9.5 15.6-19.5L82.1 313.7C90.3 307.9 96 298.8 96 288c0-11.6-6.5-21.3-15.7-26.9 .8-15 8.4-28.3 20.7-36.7L296.6 284.5c9.1 2.8 26.4 6.3 46.8 0l279-85.7c23.6-7.2 23.6-38.4 0-45.6zM352.8 315.1c-28.5 8.8-52.8 3.9-65.6 0l-145-44.6L128 384c0 35.4 86 64 192 64s192-28.7 192-64l-14.2-113.5-145 44.6z"/></svg></div>
        </div>
        <h3 style="font-weight: 600;">Mengapa SHS?</h3>
         <p style="font-size: 15px;"class="short" align="left"> Sekolah Hamidah Sampurna (SHS) hadir sebagai pilihan pendidikan terbaik bagi generasi...</p>
                        <p style="font-size: 15px;"class="full hidden" align="left">
                        Sekolah Hamidah Sampurna (SHS) hadir sebagai pilihan pendidikan terbaik bagi generasi masa depan. Kami mengintegrasikan nilai-nilai Islam, pendidikan berbasis sains dan teknologi, serta pendekatan pembelajaran inovatif yang dirancang untuk mengembangkan potensi akademik, karakter, dan spiritual peserta didik. Dilengkapi dengan fasilitas modern dan lingkungan belajar yang kondusif, SHS berkomitmen membentuk pribadi yang unggul, berakhlak mulia, dan adaptif terhadap perkembangan zaman serta tantangan dunia global.
                        </p>
                         <button class="toggle-btn">Selengkapnya</button>
      </div>

      <!-- Kartu 2 -->
      <div class="akademik-card">
        <div class="shield-icon">
          <div class="bs-icon-md bs-icon-rounded bs-icon-primary justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: #6b479e; text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" height="60" width="50" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M496 128v16a8 8 0 0 1 -8 8h-24v12c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12v-12H24a8 8 0 0 1 -8-8v-16a8 8 0 0 1 4.9-7.4l232-88a8 8 0 0 1 6.1 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.3 0-24 10.7-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.3-10.7-24-24-24zM96 192v192H60c-6.6 0-12 5.4-12 12v20h416v-20c0-6.6-5.4-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z"/></svg></div>
        </div>
        <h3 style="font-weight: 600;">Tentang Sekolah</h3>
        <p style="font-size: 15px;"class="short" align="left"> SHS menaungi 4 jenjang pendidikan yang saling terintegrasi dan berkesinambungan...</p>
                        <p style="font-size: 15px;"class="full hidden" align="left">SHS menaungi 4 jenjang pendidikan yang saling terintegrasi dan berkesinambungan, yaitu: 
                       
                           <br> <br>-	Playgroup (PG) 
                            <br>-	Taman Kanak-Kanak (TK A & TK B)
                            <br>-	Sekolah Dasar (SD)
                            <br>-	Sekolah Menengah Pertama (SMP) 
                            <br><br>Setiap jenjang dirancang sesuai tahap tumbuh kembang anak, menggabungkan kurikulum nasional, internasional, penggunaan modul cambridge dan nilai-nilai Islami sebagai fondasi utama pendidikan karakter.
        
                        </p>
                         <button class="toggle-btn">Selengkapnya</button>
      </div>

      <!-- Kartu 3 -->
      <div class="akademik-card">
        <div class="shield-icon">
          <div class="bs-icon-md bs-icon-rounded bs-icon-primary  justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: #6b479e;text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" height="60" width="50" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M336.2 80c-49.1 0-93.3-32-161.9-32-31.3 0-58.3 6.5-80.7 15.2a48 48 0 0 0 2.1-20.7C93.1 19.6 74.2 1.6 51.2 .1 23.2-1.7 0 20.4 0 48c0 17.8 9.7 33.3 24 41.6V496c0 8.8 7.2 16 16 16h16c8.8 0 16-7.2 16-16v-83.4C109.9 395.3 143.3 384 199.8 384c49.1 0 93.3 32 161.9 32 58.5 0 102-22.6 128.5-40C503.8 367.2 512 352.1 512 335.9V95.9c0-34.5-35.3-57.8-66.9-44.1C409.2 67.3 371.6 80 336.2 80zM464 336c-21.8 15.4-60.8 32-102.3 32-59.9 0-102-32-161.9-32-43.4 0-96.4 9.4-127.8 24V128c21.8-15.4 60.8-32 102.3-32 59.9 0 102 32 161.9 32 43.3 0 96.3-17.4 127.8-32v240z"/></svg></div>
        </div>
        <h3 style="font-weight: 600;">Bersekolah di SHS</h3>
        <p style="font-size: 15px;"class="short" align="left">Bersekolah di SHS berarti bergabung dalam ekosistem pendidikan modern yang...</p>
                        <p style="font-size: 15px;"class="full hidden" align="left">Bersekolah di SHS berarti bergabung dalam ekosistem pendidikan modern yang terintegrasi secara digital. Kami menyediakan:
                            <br><br>- Sistem Akademik Berbasis Digital (SmartBook & e-Report)
                            <br>- Platform Komunikasi Sekolah-Orangtua (Mumtaz App)
                            <br>- E-learning & Digital Class Support
                            <br>- Monitoring Perkembangan Belajar secara Real-time
                           <br> <br>Dengan layanan ini, proses pembelajaran menjadi lebih transparan, terukur, dan efisien baik bagi siswa, guru, maupun orang tua.</p>
                    <button class="toggle-btn">Selengkapnya</button>
      </div>
    </div>
  </section>
    
     <section class="fakta-section">
        <div class="container-fakta">
            <h2 class="judul-fakta">Visitors</h2>
            <div class="fakta-grid">
                
                <div class="fakta-item">
                    <h3 class="count" data-target="<?php echo e($visitorCount); ?>">0</h3>
                    <p>Pengunjung</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background: var(--bs-white);">
    <div class="container text-center py-6" style="margin-top: 40px">
        <p style="font-size: 1.6rem; margin-bottom: 0;"><strong>Partners</strong></p>
        <p style="font-size: 0.9rem; margin-bottom: 2.5rem;">
        Sebagai sekolah berbasis Islamic - Science - Technology, Sekolah Hamidah Sampurna menjalin kemitraan strategis dengan:
        </p>

        <div class="justify-content-center" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; gap: 1.5rem 1rem;">
            
            
            <?php $__currentLoopData = $logos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e(asset('storage/logo_images/' . $logo->image)); ?>" 
                     alt="<?php echo e($logo->name); ?>" 
                     style="height: <?php echo e($logo->height); ?>px; width: auto;" />
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>  
    </div>
</section>

    

    

    
    

    

<section class="unggulan-section">
        <div class="container-riset">
            <div class="section-header">
                <h2>Islamic – Science – Technology</h2>
                <p>Sekolah Hamidah Sampurna berkomitmen membentuk generasi masa depan yang unggul melalui integrasi nilai-nilai Islam, ilmu pengetahuan, dan pemanfaatan teknologi digital dalam proses pembelajaran. Dengan pendekatan ini, siswa dibimbing untuk memiliki karakter mulia, kecerdasan intelektual, dan kesiapan teknologi sejak dini.</p>
            </div>

            <div class="cards-container-riset">
                <div class="card-riset">
                    <img src="<?php echo e(asset('/theme')); ?>/img/IST/Pendidikan Berbasis Nilai Islam.jpg" alt="Ilustrasi Riset dan Inovasi" class="card-img-riset">
                    <div class="card-overlay-riset">
                        <div class="card-content-riset">
                            <a href="pendidikan-berbasis-nilai-islam"><h3 style="color:white;">Pendidikan Berbasis Nilai Islam</h3></a>
                            <a href="pendidikan-berbasis-nilai-islam"><p style="color:white;">Menanamkan karakter mulia melalui pembiasaan ibadah, akhlak baik, dan cinta Al-Qur’an dalam kehidupan sehari-hari.</p></a>
                        </div>
                    </div>
                </div>

                <div class="card-riset">
                    <img src="<?php echo e(asset('/theme')); ?>/img/IST/Sains & Pengetahuan Modern.JPG" alt="Ilustrasi Inovasi Unggulan" class="card-img-riset">
                    <div class="card-overlay-riset">
                         <div class="card-content-riset">
                            <a href="sains-dan-pengetahuan-modern"><h3 style="color:white;">Sains & Pengetahuan Modern</h3></a>
                            <a href="sains-dan-pengetahuan-modern"><p style="color:white;">Meningkatkan minat dan berpikir kritis siswa lewat pendekatan tematik, eksperimen, dan proyek pembelajaran.</p></a>
                        </div>
                    </div>
                </div>

                <div class="card-riset">
                    <img src="<?php echo e(asset('/theme')); ?>/img/IST/Integrasi Teknologi 1.jpg" alt="Ilustrasi Entrepreneurial" class="card-img">
                     <div class="card-overlay-riset">
                        <div class="card-content-riset">
                            <a href="integrasi-teknologi"><h3 style="color:white;">Integrasi Teknologi</h3></a>
                            <a href="integrasi-teknologi"><p style="color:white;">Mengoptimalkan e-book, smartbook, dan aplikasi digital untuk mendukung pembelajaran di era digital secara bijak.</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="school-life-section">
        <h2 class="main-title">Kehidupan Sekolah</h2>
        <p class="intro-text">
            Untuk mendukung tumbuh kembang siswa secara menyeluruh, Sekolah Hamidah Sampurna menyediakan berbagai fasilitas pembelajaran modern, program pengembangan karakter, serta beragam kegiatan ekstrakurikuler.
        </p>

        <div class="features-container">
            <div class="feature-card">
                <a href="kebijakan-pendidikan-karakter" class="card-image-link">
                    <img src="theme/img/Kebijakan Pendidikan Karakter.jpg" alt="Ilustrasi Kebijakan Sekolah">
                </a>
                <div class="card-content">
                    <h3 class="card-title">
                        <a href="kebijakan-pendidikan-karakter" class="card-title-link">Kebijakan Pendidikan Karakter</a>
                    </h3>
                    <div class="description-wrapper">
                        <p class="card-description">
                            Sekolah Hamidah Sampurna menerapkan kebijakan yang menanamkan nilai-nilai Islami, kedisiplinan, tanggung jawab, dan semangat belajar
                            dalam setiap aktivitas siswa, baik di dalam maupun di luar kelas.
                        </p>
                    </div>
                    <button class="btn-read-more">Baca Selengkapnya</button>
                </div>
            </div>

            <div class="feature-card">
                <a href="fasilitas-unggulan" class="card-image-link">
                    <img src="theme/img/IMG_0145.jpg" alt="Ilustrasi Fasilitas Sekolah">
                </a>
                 <div class="card-content">
                    <h3 class="card-title">
                        <a href="fasilitas-unggulan" class="card-title-link">Fasilitas Unggulan</a>
                    </h3>
                    <div class="description-wrapper">
                        <p class="card-description">
                           Dilengkapi dengan ruang kelas interaktif, area olahraga, ruang ibadah, serta fasilitas literasi dan digital, hingga lingkungan sekolah yang ramah anak. Semua dirancang untuk mendukung tumbuh kembang siswa secara optimal, baik akademik maupun karakter.
                        </p>
                    </div>
                    <button class="btn-read-more">Baca Selengkapnya</button>
                </div>
            </div>

            <div class="feature-card">
                <a href="ekstrakurikuler" class="card-image-link">
                    <img src="theme/img/Ekskul.JPG" alt="Ilustrasi Kegiatan Ekstrakurikuler">
                </a>
                <div class="card-content">
                    <h3 class="card-title">
                        <a href="ekstrakurikuler" class="card-title-link">Ekstrakurikuler</a>
                    </h3>
                    <div class="description-wrapper">
                        <p class="card-description">
                           Tersedia 7 kegiatan ekstrakurikuler yang mencakup aspek akademik dan non-akademik untuk mengembangkan potensi siswa secara menyeluruh.
                        </p>
                    </div>
                    <button class="btn-read-more">Baca Selengkapnya</button>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section-1">
        <div class="hero-image-container">
            <div class="image-frame">
                <img src="theme/img/Revisi Unggulan.jpg" alt="Perwakilan Sekolah Hamidah Sampurna">
            </div>
        </div>

        <div class="hero-content-container">
            <div class="content-wrapper">
                <div class="hero-headline">
                    <span class="badge-text">UNGGULAN</span>
                    <h1>Sekolah Bilingual Unggulan di Kabupaten Bandung</h1>
                </div>
                <p class="hero-subheadline">
                    Sekolah Hamidah Sampurna menghadirkan pendidikan berbasis nilai Islami, sains, dan teknologi dengan pendekatan bilingual (Indonesia–English) untuk membentuk generasi cerdas, berkarakter, dan siap menghadapi dunia global.
                </p>

                <div class="cta-block">
                    <h2>Bergabung Bersama Kami</h2>
                    <p>Wujudkan potensi terbaik bersama Sekolah Hamidah Sampurna.</p>
                    <a href="https://ppdb.hamidahsampurna.sch.id/" class="cta-button">Mulai Bergabung</a>
                </div>
            </div>
        </div>
    </section>

    <section class="events-section">
    <div class="events-container">
        <div class="section-header">
            <h2 class="section-title-event">Event Terbaru</h2>
            <p class="section-subtitle" style="color: black">
                Sebagai bagian dari upaya mendukung pembentukan karakter dan potensi siswa, Sekolah Hamidah Sampurna secara rutin menghadirkan berbagai kegiatan akademik dan non-akademik yang inspiratif, edukatif, dan menyenangkan. Mulai dari parents meeting, student fair, class meeting, market day, hingga graduation ceremony, setiap event dirancang untuk menumbuhkan kemandirian, kreativitas, dan semangat kolaborasi siswa.
            </p>
        </div>

        <div class="event-list">
            <?php $__empty_1 = true; $__currentLoopData = $latestEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <article class="event-item">
                    <div class="event-date">
                        <span class="date-day"><?php echo e($event->start_datetime->format('d')); ?></span>
                        <span class="date-month"><?php echo e($event->start_datetime->format('M')); ?></span>
                        <span class="date-year"><?php echo e($event->start_datetime->format('Y')); ?></span>
                    </div>
                    <div class="event-details">
                        
                        <h3><a href="<?php echo e(route('event.detail', ['slug' => $event->slug])); ?>" class="event-link"><?php echo e($event->title); ?></a></h3>
                        <p class="event-description">
                            <?php echo \Illuminate\Support\Str::limit(strip_tags($event->content), 150, '...'); ?>

                        </p>
                        <div class="event-meta">
                            <span>🗓️ (<?php echo e($event->start_datetime->format('F d, Y')); ?>)</span>
                        </div>
                    </div>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>Belum ada event yang akan datang.</p>
            <?php endif; ?>
        </div>

        <div class="events-button-wrapper">
            <a href="<?php echo e(route('event.list')); ?>" class="events-view-all-button">Lihat Selengkapnya</a>
        </div>
    </div>
</section>



<section class="visit-section">
    <div class="visit-overlay"></div>
    
    <div class="visit-content">
        <h1 class="visit-title">School Visit</h1>
        <p class="visit-subtitle">SEKOLAH HAMIDAH SAMPURNA</p>
        <div class="visit-buttons">
            <a href="https://forms.gle/2QN8M6TwLiUwUps36" class="btn-visit primary">Jadwalkan Kunjungan</a>
            <a href="https://forms.gle/7cseak5QnrDD7sUd6" class="btn-visit secondary">Survei Kepuasan Kunjungan</a>
        </div>
    </div>
</section>


<section class="aspirations-section">
    <div class="aspirations-container">
        <div class="section-header">
            <h2 class="section-title">Sampaikan Aspirasimu, Hamidah Friends!</h2>
            <p class="section-subtitle">
                Kami percaya setiap suara itu penting. Yuk, sampaikan aspirasi, ide, atau kendalamu melalui Halo Kepala Sekolah, Suara Hamidah Friends, dan Bimbingan Konseling (BK). Mari bersama membangun lingkungan belajar yang nyaman, positif, dan saling mendukung!
            </p>
        </div>

        <div class="aspirations-grid justify-content-center">
            <article class="aspiration-card">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.64 5.912 1.56V3.224zM0 4.312a1 1 0 0 1 1-1h1v1.5a.5.5 0 0 1-1 0zm0 4.156a1 1 0 0 1 1-1h1v1.5a.5.5 0 0 1-1 0z"/>
                    </svg>
                </div>
                <h3 class="card-title">Halo Kepala Sekolah</h3>
                <p class="card-description">Saluran langsung untuk berdiskusi atau memberi masukan kepada pimpinan sekolah.</p>
                <a href="#" class="card-button" data-href="hamidah-voice">Klik Disini</a>
            </article>

            <article class="aspiration-card">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    </svg>
                </div>
                <h3 class="card-title">Suara Hamidah Friends</h3>
                <p class="card-description">Wadah untuk berbagi keluhan, saran, dan ide antar sesama siswa secara konstruktif.</p>
                <a href="#" class="card-button" data-href="hamidah-voice">Klik Disini</a>
            </article>
            
            <article class="aspiration-card">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11.646 1.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L12.293 3.5 11.646 3H5a2 2 0 0 0-2 2v1.293l.646-.647a.5.5 0 1 1 .708.708l-2 2a.5.5 0 0 1 0 .708l2 2a.5.5 0 0 1-.708.708L3.646 11H5a2 2 0 0 0 2-2v-1h1.293l.647.646a.5.5 0 0 1-.708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 0-.708l2-2a.5.5 0 0 1 .708 0L5.293 9H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h6.293l-.647-.646a.5.5 0 0 1 0-.708l2-2z"/>
                        <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m0 1a.5.5 0 1 1 0 1 .5.5 0 0 1 0-1"/>
                    </svg>
                </div>
                <h3 class="card-title">Bimbingan dan Konseling</h3>
                <p class="card-description">Ruang aman dan rahasia untuk berkonsultasi mengenai masalah pribadi atau akademik.</p>
                <a href="#" class="card-button" data-href="hamidah-voice">Klik Disini</a>
            </article>
        </div>
    </div>
</section>

    
    
     <audio id="backgroundMusic" loop>
    <source src="<?php echo e(asset('/theme/audio/Jingle Sekolah Hamidah Sampurna Rev1.mp3')); ?>" type="audio/mpeg">
    Browser Anda tidak mendukung elemen audio.
</audio>

<div id="music-container">
    <button id="musicButton" aria-label="Play/Pause Music">
        <i class="fas fa-play" id="musicIcon"></i>
    </button>
</div>

<style>
    #music-container {
        position: fixed; 
        bottom: 20px;
        right: 20px;
        z-index: 1000; 
    }

    #musicButton {
        width: 50px;
        height: 50px;
        border-radius: 50%; 
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        background: linear-gradient(145deg, #8a63c9, #6b479e);
        color: white;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s ease-in-out;
    }

    #musicButton:hover {
        transform: scale(1.1);
    }

    #musicIcon {
        font-size: 20px;
    }

    #musicButton.playing {
        animation: spin 3s linear infinite;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const audio = document.getElementById('backgroundMusic');
        const musicButton = document.getElementById('musicButton');
        const musicIcon = document.getElementById('musicIcon');
        let wasPlayingBeforeHidden = false;

        // --- Fungsi untuk mengubah tampilan tombol ---
        function setPlayingUI() {
            musicIcon.classList.remove('fa-play');
            musicIcon.classList.add('fa-pause');
            musicButton.classList.add('playing');
        }

        function setPausedUI() {
            musicIcon.classList.remove('fa-pause');
            musicIcon.classList.add('fa-play');
            musicButton.classList.remove('playing');
        }

        // --- Fungsi untuk tombol Play/Pause (Manual) ---
        function toggleMusic() {
            if (audio.paused) {
                // Jika user klik untuk PLAY
                audio.play().then(() => {
                    setPlayingUI();
                    // Simpan status 'playing' karena ini aksi manual
                    localStorage.setItem('musicState', 'playing');
                });
            } else {
                // Jika user klik untuk PAUSE
                audio.pause();
                setPausedUI();
                // Simpan status 'paused' karena ini aksi manual
                localStorage.setItem('musicState', 'paused');
            }
        }
        musicButton.addEventListener('click', toggleMusic);

        // --- LOGIKA UTAMA: AUTOPLAY SAAT HALAMAN BERANDA DIMUAT ---
        const lastManualState = localStorage.getItem('musicState');
        
        // Hanya hormati status 'paused' jika itu adalah pilihan manual user sebelumnya.
        if (lastManualState === 'paused') {
            setPausedUI();
        } else {
            // Jika status sebelumnya 'playing' atau ini kunjungan pertama (null),
            // SELALU coba putar musik.
            audio.play().then(() => {
                // Jika autoplay berhasil
                setPlayingUI();
                localStorage.setItem('musicState', 'playing');
            }).catch(error => {
                // Jika autoplay gagal (diblokir browser), cukup tampilkan UI pause.
                // PENTING: KITA TIDAK MENYIMPAN 'paused' KE localStorage DI SINI.
                // Ini membuat browser akan mencoba lagi pada reload berikutnya.
                setPausedUI();
            });
        }
        
        // --- LOGIKA UNTUK PAUSE/PLAY SAAT PINDAH TAB (TETAP SAMA) ---
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                if (!audio.paused) {
                    wasPlayingBeforeHidden = true;
                    audio.pause();
                }
            } else {
                if (wasPlayingBeforeHidden) {
                    // Hanya putar kembali jika status manual bukan 'paused'
                    if (localStorage.getItem('musicState') !== 'paused') {
                        audio.play();
                    }
                    wasPlayingBeforeHidden = false;
                }
            }
        });
    });
</script>
    
    <div class="modal-backdrop" id="aspiration-modal" style="display: none;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi Penyampaian Aspirasi</h4>
                <span class="modal-close" id="modal-close-button">&times;</span>
            </div>
            <div class="modal-body">
                <p>
                    Apakah Anda yakin ingin melanjutkan?
                </p>
                <p class="modal-disclaimer">
                    Aspirasi yang disampaikan diharapkan jujur, sopan, dan dapat dipertanggungjawabkan demi kebaikan bersama. Terima Kasih.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="modal-button" id="modal-cancel-button">Kembali</button>
                <a href="#" id="modal-proceed-button" class="modal-button modal-button-primary">Lanjutkan</a>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('/theme')); ?>/js/beranda.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/beranda.blade.php ENDPATH**/ ?>