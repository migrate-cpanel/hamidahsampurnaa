@extends('main_blog')

@section('title', 'Beranda')

@section('content')

 <link rel="stylesheet" href="{{ asset('/theme') }}/css/beranda.css">
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/counter.css">

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
            @foreach ($sliders as $item)
                <div class="carousel-item @if($loop->first) active @endif">
                    <img class="d-block w-100" src="{{ url('/img/uploads/' . $item->image_url ?? '/') }}" alt="Slider Image">
                </div>
            @endforeach
        </div>

        @if(count($sliders) > 1)
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        @endif
    </div>
</header>
     <div class="top-strip ">	 	 </div>


<section class="school-life-section-1">
        <h2 class="main-title-1">Akademik</h2>

</section>


  <section class="akademik-section ">
    <div class="akademik-header">


      {{-- <h2>Akademik</h2>
      <p></p> --}}
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
    {{-- <div class="container py-4 py-xl-5" style="text-align: center;">
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">

                        <div class=" justify-content-center align-items-center bs-icon-md bs-icon-rounded bs-icon-primary d-inline-block mb-3 bs-icon" style="background: var(--bs-secondary-text-emphasis); text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" height="18" width="22.5" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M622.3 153.2L343.4 67.5c-15.2-4.7-31.6-4.7-46.8 0L17.7 153.2c-23.5 7.2-23.5 38.4 0 45.6l48.6 14.9c-10.7 13.2-17.2 29.3-17.9 46.9C38.8 266.2 32 276.1 32 288c0 10.8 5.7 19.9 13.9 25.7L20.3 428.5C18.1 438.5 25.7 448 35.9 448h56.1c10.2 0 17.8-9.5 15.6-19.5L82.1 313.7C90.3 307.9 96 298.8 96 288c0-11.6-6.5-21.3-15.7-26.9 .8-15 8.4-28.3 20.7-36.7L296.6 284.5c9.1 2.8 26.4 6.3 46.8 0l279-85.7c23.6-7.2 23.6-38.4 0-45.6zM352.8 315.1c-28.5 8.8-52.8 3.9-65.6 0l-145-44.6L128 384c0 35.4 86 64 192 64s192-28.7 192-64l-14.2-113.5-145 44.6z"/></svg></div>
                        <h4 class="card-title">Mengapa SHS?</h4>
                        <p class="short" align="justify"> Sekolah Hamidah Sampurna (SHS) hadir sebagai pilihan pendidikan terbaik bagi generasi...</p>
                        <p class="full hidden" align="justify">
                        Sekolah Hamidah Sampurna (SHS) hadir sebagai pilihan pendidikan terbaik bagi generasi masa depan. Kami mengintegrasikan nilai-nilai Islam, pendidikan berbasis sains dan teknologi, serta pendekatan pembelajaran inovatif yang dirancang untuk mengembangkan potensi akademik, karakter, dan spiritual peserta didik. Dilengkapi dengan fasilitas modern dan lingkungan belajar yang kondusif, SHS berkomitmen membentuk pribadi yang unggul, berakhlak mulia, dan adaptif terhadap perkembangan zaman.
                        </p>
                         <button class="toggle-btn">Selengkapnya</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="bs-icon-md bs-icon-rounded bs-icon-primary justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: var(--bs-secondary-text-emphasis); text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" height="18" width="18" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M496 128v16a8 8 0 0 1 -8 8h-24v12c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12v-12H24a8 8 0 0 1 -8-8v-16a8 8 0 0 1 4.9-7.4l232-88a8 8 0 0 1 6.1 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.3 0-24 10.7-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.3-10.7-24-24-24zM96 192v192H60c-6.6 0-12 5.4-12 12v20h416v-20c0-6.6-5.4-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z"/></svg></div>
                        <h4 class="card-title">Tentang Sekolah</h4>
                        <p class="short" align="justify"> SHS menaungi 4 jenjang pendidikan yang saling terintegrasi dan berkesinambungan...</p>
                        <p class="full hidden" align="justify">SHS menaungi 4 jenjang pendidikan yang saling terintegrasi dan berkesinambungan, yaitu: 
                       
                            <br>-	Playgroup (PG) 
                            <br>-	Taman Kanak-Kanak (TK A & TK B)
                            <br>-	Sekolah Dasar (SD)
                            <br>-	Sekolah Menengah Pertama (SMP) 
                            <br>Setiap jenjang dirancang sesuai tahap tumbuh kembang anak, menggabungkan kurikulum nasional, internasional, penggunaan modul cambridge dan nilai-nilai Islami sebagai fondasi utama pendidikan karakter.
        
                        </p>
                         <button class="toggle-btn">Selengkapnya</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="bs-icon-md bs-icon-rounded bs-icon-primary  justify-content-center align-items-center d-inline-block mb-3 bs-icon" style="background: var(--bs-secondary-text-emphasis);text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" height="18" width="18" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M336.2 80c-49.1 0-93.3-32-161.9-32-31.3 0-58.3 6.5-80.7 15.2a48 48 0 0 0 2.1-20.7C93.1 19.6 74.2 1.6 51.2 .1 23.2-1.7 0 20.4 0 48c0 17.8 9.7 33.3 24 41.6V496c0 8.8 7.2 16 16 16h16c8.8 0 16-7.2 16-16v-83.4C109.9 395.3 143.3 384 199.8 384c49.1 0 93.3 32 161.9 32 58.5 0 102-22.6 128.5-40C503.8 367.2 512 352.1 512 335.9V95.9c0-34.5-35.3-57.8-66.9-44.1C409.2 67.3 371.6 80 336.2 80zM464 336c-21.8 15.4-60.8 32-102.3 32-59.9 0-102-32-161.9-32-43.4 0-96.4 9.4-127.8 24V128c21.8-15.4 60.8-32 102.3-32 59.9 0 102 32 161.9 32 43.3 0 96.3-17.4 127.8-32v240z"/></svg></div>
                        <h4 class="card-title" >Bersekolah di SHS</h4>
                        <p class="short" align="justify">Bersekolah di SHS berarti bergabung dalam ekosistem pendidikan modern yang...</p>
                        <p class="full hidden" align="justify">Bersekolah di SHS berarti bergabung dalam ekosistem pendidikan modern yang terintegrasi secara digital. Kami menyediakan:
                            <br>-  Sistem Akademik Berbasis Digital (SmartBook & e-Report)
                            <br>-  Platform Komunikasi Sekolah-Orangtua (Mumtaz App)
                            <br>-  E-learning & Digital Class Support
                            <br>-  Monitoring Perkembangan Belajar secara Real-time
                            <br>Dengan layanan ini, proses pembelajaran menjadi lebih transparan, terukur, dan efisien—baik bagi siswa, guru, maupun orang tua.</p>
                    <button class="toggle-btn">Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
     <section class="fakta-section">
        <div class="container-fakta">
            <h2 class="judul-fakta">Visitors</h2>
            <div class="fakta-grid">
                {{-- <div class="fakta-item">
                    <h3 class="count" data-target="51">0</h3>
                    <p>Guru & Karyawan</p>
                </div>
                <div class="fakta-item">
                    <h3 class="count" data-target="155">0</h3>
                    <p>Siswa/i</p>
                </div>
                <div class="fakta-item">
                    <h3 class="count" data-target="9">0</h3>
                    <p>Program Unggulan</p>
                </div> --}}
                <div class="fakta-item">
                    <h3 class="count" data-target="{{ $visitorCount }}">0</h3>
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
            
            {{-- Loop untuk menampilkan logo dari database --}}
            @foreach($logos as $logo)
                <img src="{{ asset('storage/logo_images/' . $logo->image) }}" 
                     alt="{{ $logo->name }}" 
                     style="height: {{ $logo->height }}px; width: auto;" />
            @endforeach
            
        </div>  
    </div>
</section>

    {{-- <section class="py-5" style="background: var(--bs-white);">

        <div class="container text-center py-6" style="margin-top: 40px">

            <p style="font-size: 1.6rem; margin-bottom: 0;"><strong>Partners</strong></p>

            <p style="font-size: 0.9rem; margin-bottom: 2.5rem;">

            Sebagai sekolah berbasis Islamic - Science - Technology, Sekolah Hamidah Sampurna menjalin kemitraan strategis dengan:

            </p>



            <div class="justify-content-center" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; gap: 1.5rem 1rem;">

           

            <img src="https://roneallza.github.io/ExportWeb/assets/img/brands/favpng_9f5aef84210186295c0478049cb2de99.png" alt="Logo Kemenag" style="height: 80px; width: auto;" />

            <img src="theme/img/brands/33781e55-2fd4-4451-999b-21e48661624d.png" alt="Logo Sampoerna" style="height: 150px; width: auto;" />

            <img src="https://roneallza.github.io/ExportWeb/assets/img/brands/Bank%20Muamalat%20Logo%20(PNG720p)%20-%20Vector69Com.png" alt="Logo Bank Muamalat" style="height: 45px; width: auto;" />

            <img src="https://roneallza.github.io/ExportWeb/assets/img/clipboard-image-1.png" alt="Logo Al-Hikmah" style="height: 35px; width: auto;" />

            <img src="theme/img/ruangGuru.png" alt="Logo Ruangguru" style="height: 50px; width: auto;" />

            <img src="theme/img/Tel u.png" alt="Logo Telkom University" style="height: 65px; width: auto;" />

            <img src="theme/img/UNNES.jpeg" alt="Logo UNNES" style="height: 130px; width: auto;" />

            <img src="theme/img/samsung1.svg" alt="Logo Samsung" style="height: 40px; width: auto;" />

            <img src="theme/img/advance.png" alt="Logo Advance" style="height: 40px; width: auto;" />



            </div>  

        </div>

    </section> --}}

    {{-- <section class="py-5" style="background: var(--bs-white);">
  <div class="container text-center py-6" style="margin-top: 40px">
    <p style="font-size: 1.6rem; margin-bottom: 0;"><strong>Partners</strong></p>
    <p style="font-size: 0.9rem; margin-bottom: 2.5rem;">
      Sebagai sekolah berbasis Islamic - Science - Technology, Sekolah Hamidah Sampurna menjalin kemitraan strategis dengan:
    </p>

    <div class="partner-logo-container">
      <img src="https://roneallza.github.io/ExportWeb/assets/img/brands/favpng_9f5aef84210186295c0478049cb2de99.png" alt="Logo Kemenag" class="partner-logo" />
      <img src="theme/img/brands/33781e55-2fd4-4451-999b-21e48661624d.png" alt="Logo Sampoerna" class="partner-logo" />
      <img src="https://roneallza.github.io/ExportWeb/assets/img/brands/Bank%20Muamalat%20Logo%20(PNG720p)%20-%20Vector69Com.png" alt="Logo Bank Muamalat" class="partner-logo" />
      <img src="https://roneallza.github.io/ExportWeb/assets/img/clipboard-image-1.png" alt="Logo Al-Hikmah" class="partner-logo" />
      <img src="theme/img/ruangGuru.png" alt="Logo Ruangguru" class="partner-logo" />
      <img src="theme/img/Tel u.png" alt="Logo Telkom University" class="partner-logo" />
      <img src="theme/img/UNNES.jpeg" alt="Logo UNNES" class="partner-logo" />
      <img src="theme/img/samsung1.svg" alt="Logo Samsung" class="partner-logo" />
      <img src="theme/img/advance.png" alt="Logo Advance" class="partner-logo" />
    </div>

  </div>
</section> --}}

    {{-- <div class="container">
        <header class="section-header">
            <h1>Berita Terkini</h1>
            <p>Informasi terkini terkait Civitas Academica Telkom University</p>
        </header>

        <main class="news-layout">
            <article class="news-card featured">
                <div class="card-image">
                    <img src="https://i.pinimg.com/1200x/b2/a7/8b/b2a78b7520577fc3664213e22bffd2c3.jpg" alt="Berita Utama">
                    <span class="category-tag">Riset Inovasi</span>
                </div>
                <div class="card-content">
                    <h2>Perkuat Ekosistem Talenta Digital, Tel-U dan Telkom Indonesia...</h2>
                    <a href="#" class="read-more">BACA SELENGKAPNYA</a>
                </div>
            </article>

            <article class="news-card">
                <div class="card-image">
                    <img src="https://i.pinimg.com/736x/e1/4e/41/e14e41b698a49fc3358014184bf39f6b.jpg" alt="Berita Kecil 1">
                    <span class="category-tag">Kabar Fakultas</span>
                </div>
                <div class="card-content">
                    <h3>Peningkatan Kualitas Komunikasi, FRI Gelar Pelatihan Speaking Techniques...</h3>
                    <a href="#" class="read-more">BACA SELENGKAPNYA</a>
                </div>
            </article>

            <article class="news-card">
                <div class="card-image">
                    <img src="https://i.pinimg.com/1200x/b2/a7/8b/b2a78b7520577fc3664213e22bffd2c3.jpg" alt="Berita Kecil 2">
                    <span class="category-tag">Pendidikan</span>
                </div>
                <div class="card-content">
                    <h3>Alasan Mengapa Memilih Jurusan Teknik Telekomunikasi Telkom University...</h3>
                    <a href="#" class="read-more">BACA SELENGKAPNYA</a>
                </div>
            </article>

            <article class="news-card">
                <div class="card-image">
                    <img src="https://i.pinimg.com/736x/e1/4e/41/e14e41b698a49fc3358014184bf39f6b.jpg" alt="Berita Kecil 3">
                    <span class="category-tag">Prestasi</span>
                </div>
                <div class="card-content">
                    <h3>HMTI Telkom University Raih Pendanaan PPK Ormawa 2025...</h3>
                    <a href="#" class="read-more">BACA SELENGKAPNYA</a>
                </div>
            </article>

            <article class="news-card">
                <div class="card-image">
                    <img src="https://i.pinimg.com/1200x/b2/a7/8b/b2a78b7520577fc3664213e22bffd2c3.jpg" alt="Berita Kecil 4">
                    <span class="category-tag">Pengabdian Masyarakat</span>
                </div>
                <div class="card-content">
                    <h3>Transformasi Digital Dalam Pendidikan: Workshop Implementasi AI Bagi...</h3>
                    <a href="#" class="read-more">BACA SELENGKAPNYA</a>
                </div>
            </article>
        </main>

        <footer class="section-footer">
            <a href="#" class="button-primary">LIHAT SELENGKAPNYA</a>
        </footer>
    </div> --}}
    {{-- <div class="container py-4 py-xl-5">
        <div class="row">
            <div class="col-md-8 col-xl-6 mx-auto" style="padding-top: 28px;">
                <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center me-4 d-inline-block bs-icon xl" style="background: var(--bs-secondary-text-emphasis);"><svg xmlns="http://www.w3.org/2000/svg" height="36" width="54" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M288 144a110.9 110.9 0 0 0 -31.2 5 55.4 55.4 0 0 1 7.2 27 56 56 0 0 1 -56 56 55.4 55.4 0 0 1 -27-7.2A111.7 111.7 0 1 0 288 144zm284.5 97.4C518.3 135.6 410.9 64 288 64S57.7 135.6 3.5 241.4a32.4 32.4 0 0 0 0 29.2C57.7 376.4 165.1 448 288 448s230.3-71.6 284.5-177.4a32.4 32.4 0 0 0 0-29.2zM288 400c-98.7 0-189.1-55-237.9-144C98.9 167 189.3 112 288 112s189.1 55 237.9 144C477.1 345 386.7 400 288 400z"/></svg></div>
                    <div>
                        <h4>Visi</h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Mewujudkan peserta didik yang beragama, berkarakter, memiliki keterampilan abad 21 dan menjadi “Center of Excellence” pendidikan berbasis Islami, ilmu pengetahuan dan teknologi.
                                </li>
                            </ul>
                    </div>
                </div>
                <hr class="my-5">
                <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center order-last ms-4 d-inline-block bs-icon xl" style="background: var(--bs-secondary-text-emphasis);"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M336.2 80c-49.1 0-93.3-32-161.9-32-31.3 0-58.3 6.5-80.7 15.2a48 48 0 0 0 2.1-20.7C93.1 19.6 74.2 1.6 51.2 .1 23.2-1.7 0 20.4 0 48c0 17.8 9.7 33.3 24 41.6V496c0 8.8 7.2 16 16 16h16c8.8 0 16-7.2 16-16v-83.4C109.9 395.3 143.3 384 199.8 384c49.1 0 93.3 32 161.9 32 58.5 0 102-22.6 128.5-40C503.8 367.2 512 352.1 512 335.9V95.9c0-34.5-35.3-57.8-66.9-44.1C409.2 67.3 371.6 80 336.2 80zM464 336c-21.8 15.4-60.8 32-102.3 32-59.9 0-102-32-161.9-32-43.4 0-96.4 9.4-127.8 24V128c21.8-15.4 60.8-32 102.3-32 59.9 0 102 32 161.9 32 43.3 0 96.3-17.4 127.8-32v240z"/></svg></div>
                    <div>
                        <h4 style="text-align: right;">Misi</h4>
                        <ul class="list-group" style="text-align:right;">
                            <li class="list-group-item"><span> Mengenalkan dan menanamkan ajaran agama sejak dini kepada peserta didik, sehingga dapat diamalkan dalam kehidupan sehari-hari. </span></li>
                            <li class="list-group-item"><span> Membentuk karakter peserta didik yang berakhlak mulia. </span></li>
                            <li class="list-group-item"><span> Mengembangkan potensi diri peserta didik agar memiliki keterampilan sesuai dengan minat dan bakat. </span></li>
                            <li class="list-group-item"><span> Menerapkan sistem pendidikan yang berbasis ilmu pengetahuan dan teknologi. </span></li>
                            <li class="list-group-item"><span> Aktif dalam mengembangkan sistem pendidikan yang unggul didukung oleh sarana prasarana modern dan tenaga pendidik yang berkualitas tinggi. </span></li>
                        </ul>
                    </div>
                </div>
                <hr class="my-5">
            </div>
        </div>
    </div> --}}

    {{-- <section style="background: var(--bs-light);">
        <div class="container py-5 py-xl-5 ">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="margin-top:47px;"><strong>Berita Sekolah dan Update</strong></h2><a
                        href="{{ url('berita') }}">Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" height="14"
                            width="12.25" viewbox="0 0 448 512">
                            <path fill="#7a7a7a"
                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
                            </path>
                        </svg></a>
                </div>
            </div>
            <div class="carousel slide" data-bs-ride="carousel" id="beritaCarousel">
                <div class="carousel-inner">
                    @php
                        $news = DB::table('news')
                            ->join('admins', 'admins.id', '=', 'news.idadmins')
                            ->select('news.*', 'admins.name', 'admins.admin_photo_url')
                            ->orderby('news.id', 'asc')
                            ->limit(15)
                            ->get();
                        $chunks = $news->chunk(3);
                    @endphp
                    @foreach ($chunks as $index => $chunk)
                        <div class="carousel-item{{ $index == 0 ? ' active' : '' }}">
                            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
                                @foreach ($chunk as $item)
                                    <div class="col">
                                        <div class="card">
                                            <img class="card-img-top w-100 d-block card-img-top w-100 fit-cover"
                                                alt="Berita 1" src="{{ url('/img/uploads/' . $item->image_url ?? '/') }}"
                                                style="height:200px;">
                                            <div class="card-body p-4">
                                                <p class="card-text mb-0" style="color:var(--bs-secondary-text-emphasis);">
                                                    Article
                                                </p>
                                                <h4 class="card-title">{{ $item->title }}</h4>
                                                <p class="card-text">{{ \Illuminate\Support\Str::limit($item->content, 150, '...') }}</p>
                                                <div class="d-flex">
                                                    <img class="rounded-circle flex-shrink-0 me-3 fit-cover" alt="John Smith"
                                                        height="50"
                                                        src="{{ url('/img/uploads/' . $item->admin_photo_url ?? '/') }}"
                                                        width="50">
                                                    <div>
                                                        <p class="fw-bold mb-0"
                                                            style="color:var(--bs-secondary-text-emphasis);">
                                                            {{ $item->name }}
                                                        </p>
                                                        <p class="text-muted mb-0">
                                                            {{ date('d F Y H:i:s', strtotime($item->updated_at)) }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> --}}

<section class="unggulan-section">
        <div class="container-riset">
            <div class="section-header">
                <h2>Islamic – Science – Technology</h2>
                <p>Sekolah Hamidah Sampurna berkomitmen membentuk generasi masa depan yang unggul melalui integrasi nilai-nilai Islam, ilmu pengetahuan, dan pemanfaatan teknologi digital dalam proses pembelajaran. Dengan pendekatan ini, siswa dibimbing untuk memiliki karakter mulia, kecerdasan intelektual, dan kesiapan teknologi sejak dini.</p>
            </div>

            <div class="cards-container-riset">
                <div class="card-riset">
                    <img src="{{ asset('/theme') }}/img/IST/Pendidikan Berbasis Nilai Islam.jpg" alt="Ilustrasi Riset dan Inovasi" class="card-img-riset">
                    <div class="card-overlay-riset">
                        <div class="card-content-riset">
                            <a href="pendidikan-berbasis-nilai-islam"><h3 style="color:white;">Pendidikan Berbasis Nilai Islam</h3></a>
                            <a href="pendidikan-berbasis-nilai-islam"><p style="color:white;">Menanamkan karakter mulia melalui pembiasaan ibadah, akhlak baik, dan cinta Al-Qur’an dalam kehidupan sehari-hari.</p></a>
                        </div>
                    </div>
                </div>

                <div class="card-riset">
                    <img src="{{ asset('/theme') }}/img/IST/Sains & Pengetahuan Modern.JPG" alt="Ilustrasi Inovasi Unggulan" class="card-img-riset">
                    <div class="card-overlay-riset">
                         <div class="card-content-riset">
                            <a href="sains-dan-pengetahuan-modern"><h3 style="color:white;">Sains & Pengetahuan Modern</h3></a>
                            <a href="sains-dan-pengetahuan-modern"><p style="color:white;">Meningkatkan minat dan berpikir kritis siswa lewat pendekatan tematik, eksperimen, dan proyek pembelajaran.</p></a>
                        </div>
                    </div>
                </div>

                <div class="card-riset">
                    <img src="{{ asset('/theme') }}/img/IST/Integrasi Teknologi 1.jpg" alt="Ilustrasi Entrepreneurial" class="card-img">
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
            @forelse ($latestEvents as $event)
                <article class="event-item">
                    <div class="event-date">
                        <span class="date-day">{{ $event->start_datetime->format('d') }}</span>
                        <span class="date-month">{{ $event->start_datetime->format('M') }}</span>
                        <span class="date-year">{{ $event->start_datetime->format('Y') }}</span>
                    </div>
                    <div class="event-details">
                        {{-- Gunakan route('event.detail') dengan slug event --}}
                        <h3><a href="{{ route('event.detail', ['slug' => $event->slug]) }}" class="event-link">{{ $event->title }}</a></h3>
                        <p class="event-description">
                            {!! \Illuminate\Support\Str::limit(strip_tags($event->content), 150, '...') !!}
                        </p>
                        <div class="event-meta">
                            <span>🗓️ ({{ $event->start_datetime->format('F d, Y') }})</span>
                        </div>
                    </div>
                </article>
            @empty
                <p>Belum ada event yang akan datang.</p>
            @endforelse
        </div>

        <div class="events-button-wrapper">
            <a href="{{ route('event.list') }}" class="events-view-all-button">Lihat Selengkapnya</a>
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

    {{-- <section style="margin-bottom: 32px;">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="section-title"><strong>Testimoni</strong></h2><a href="#"
                        class="section-link">Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" height="14"
                            width="12.25" viewbox="0 0 448 512">
                            <path fill="#7a7a7a"
                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
                            </path>
                        </svg></a>
                </div>
            </div>
            <div class="carousel slide" data-bs-ride="carousel" id="testimonialCarousel">
                <div class="carousel-inner">
                    @php
                        $testimonials = DB::table('testimonials')
                            ->orderby('testimonials.id', 'desc')
                            ->limit(15)
                            ->get();
                        $chunks = $testimonials->chunk(3);
                    @endphp
                    @foreach ($chunks as $index => $chunk)
                        <div class="carousel-item{{ $index == 0 ? ' active' : '' }}">
                            <div class="container">
                                <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-lg-3 justify-content-center">
                                    @foreach ($chunk as $item)
                                        <div class="col">
                                            <div class="testimonial-item">
                                                <div class="bg-body-tertiary border-0 border rounded p-4 testimonial-text">
                                                    <p>{{ \Illuminate\Support\Str::limit($item->content, 150, '...')  }}</p>
                                                </div>
                                                <div class="d-flex mt-3">
                                                    <img
                                                        class="rounded-circle flex-shrink-0 me-3 fit-cover"
                                                        alt="testimonial avatar" height="50"
                                                        src="{{ url('/img/uploads/' . $item->parent_photo_url ?? '/') }}"
                                                        width="50">
                                                    <div>
                                                        <p class="fw-bold mb-0"
                                                            style="color:var(--bs-secondary-text-emphasis);">
                                                            {{ $item->parent_name }}
                                                        </p>
                                                        <p class="text-muted mb-0">
                                                            {{ date('d F Y H:i:s', strtotime($item->updated_at)) }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> --}}
    
     <audio id="backgroundMusic" loop>
    <source src="{{ asset('/theme/audio/Jingle Sekolah Hamidah Sampurna Rev1.mp3') }}" type="audio/mpeg">
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

    <script src="{{ asset('/theme') }}/js/beranda.js"></script>

@endsection
