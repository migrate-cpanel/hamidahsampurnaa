<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Website Sekolah</title>
    <link rel="icon" type="image/png" sizes="500x500"
        href="{{ asset('/theme') }}/img/Logo%20Hamidah%20Website.png">
    <link rel="icon" type="image/png" sizes="500x500"
        href="{{ asset('/theme') }}/img/Logo%20Hamidah%20Website.png" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/png" sizes="500x500"
        href="{{ asset('/theme') }}/img/Logo%20Hamidah%20Website.png">
    <link rel="icon" type="image/png" sizes="500x500"
        href="{{ asset('/theme') }}/img/Logo%20Hamidah%20Website.png" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/png" sizes="500x500"
        href="{{ asset('/theme') }}/img/Logo%20Hamidah%20Website.png">
    <link rel="icon" type="image/png" sizes="500x500"
        href="{{ asset('/theme') }}/img/Logo%20Hamidah%20Website.png">
    <link rel="icon" type="image/png" sizes="500x500"
        href="{{ asset('/theme') }}/img/Logo%20Hamidah%20Website.png">
    <link rel="stylesheet" href="{{ asset('/theme') }}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Playfair+Display:wght@400;700&family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/swiper-icons.css">
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/Articles-Cards-images.css">
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/Features-Cards-icons.css">
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/Simple-Slider-swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/Simple-Slider.css">
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/akademik.css">
    <link rel="stylesheet" href="{{ asset('/theme') }}/css/header.css">
    
    
   
    
    
</head>

<body>
    <nav class="navbar navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><img
                    src="{{ asset('/theme') }}/img/clipboard-image.png" width="95"
                    height="42"></a><button data-bs-toggle="collapse" class="navbar-toggler"
                data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('berita') }}">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('profil') }}">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('program') }}">Program</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('galeri-kegiatan') }}">Galeri Kegiatan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('ppdb') }}">PPDB</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('kontak') }}">Kontak</a></li>
                    <!-- <li class="nav-item"><a class="btn btn-primary shadow" href="{{ url('login_page') }}">Login</a> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="content">
        @yield('content')
    </section>
    <footer class="bg-primary-gradient">
        <div class="container py-4 py-lg-5">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column"><img
                        src="{{ asset('/theme') }}/img/clipboard-image.png" style="margin-bottom: 93px;">
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
                    <div>
                        <h3 class="fs-6 fw-bold"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path fill="#000000"
                                    d="M507.3 84.7L464 41.4c-6-6-14.1-9.4-22.6-9.4H288V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v16H56c-13.3 0-24 10.8-24 24v80c0 13.3 10.8 24 24 24h385.4c8.5 0 16.6-3.4 22.6-9.4l43.3-43.3c6.3-6.3 6.3-16.4 0-22.6zM224 496c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V384h-64v112zm232-272H288v-32h-64v32H70.6c-8.5 0-16.6 3.4-22.6 9.4L4.7 276.7c-6.3 6.3-6.3 16.4 0 22.6L48 342.6c6 6 14.1 9.4 22.6 9.4H456c13.3 0 24-10.8 24-24v-80c0-13.3-10.8-24-24-24z" />
                            </svg>&nbsp;Alamat</h3>
                        <ul class="list-unstyled">
                        <li>
                            <a href="https://www.google.com/maps?q=Sekolah+Hamidah+Sampurna&ll=-7.01079,107.63906&z=17" target="_blank">
                            Jl. Siliwangi No.386, Manggahang, Kec. Baleendah, Kabupaten Bandung, Jawa Barat 40375
                            </a>
                        </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="fs-6 fw-bold"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1 .6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z" />
                            </svg>&nbsp;Telepon</h3>
                        <ul class="list-unstyled">
                            <li><a href="https://wa.me/62811241206" target="_blank">Devina (+62 811-241-206)</a></li>
                            <li><a href="https://wa.me/6287845736686" target="_blank">Call Center (+62 878-4573-6686)</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="fs-6 fw-bold"><svg xmlns="http://www.w3.org/2000/svg" height="20"
                                width="20"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7 .3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2 .4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" />
                            </svg>&nbsp;Email</h3>
                        <ul class="list-unstyled">
                            <li><a href="https://mail.google.com/mail/u/0/?hl=id&tf=cm&fs=1&to=sekolahhamidahsampurna.11@gmail.com" class="text-break">sekolahhamidahsampurna.11@gmail.com</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="fs-6 fw-bold"><svg xmlns="http://www.w3.org/2000/svg" height="20"
                                width="17.5"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>&nbsp;Instagram</h3>
                        <ul class="list-unstyled">
                            <li><a href="https://www.instagram.com/hamidahsampurna/" class="text-break">@sekolahhamidahsampurna</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
                    <div>
                        <h3 class="fs-6 fw-bold"><svg xmlns="http://www.w3.org/2000/svg" height="20"
                                width="22.5"
                                viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                            </svg>&nbsp;Youtube</h3>
                        <ul class="list-unstyled">
                            <li><a href="https://www.youtube.com/channel/UCbxFmBvjscLr-XCCC58YqSw">Sekolah Hamidah</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="fs-6 fw-bold"><svg xmlns="http://www.w3.org/2000/svg" height="20"
                                width="20"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.8 90.7 226.4 209.3 245V327.7h-63V256h63v-54.6c0-62.2 37-96.5 93.7-96.5 27.1 0 55.5 4.8 55.5 4.8v61h-31.3c-30.8 0-40.4 19.1-40.4 38.7V256h68.8l-11 71.7h-57.8V501C413.3 482.4 504 379.8 504 256z" />
                            </svg>&nbsp;Facebook</h3>
                        <ul class="list-unstyled">
                            <li><a href="https://www.facebook.com/sekolahhamidahsampurna">Sekolah Hamidah Sampurna</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="fs-6 fw-bold"><svg xmlns="http://www.w3.org/2000/svg" height="20"
                                width="17.5"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
                            </svg>&nbsp;Tiktok</h3>
                        <ul class="list-unstyled">
                            <li><a href="https://www.tiktok.com/@sekolahhamidah?is_from_webapp=1&sender_device=pc">Sekolah Hamidah Sampurna</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="fs-6 fw-bold"><svg xmlns="http://www.w3.org/2000/svg" height="20"
                                width="17.5"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                            </svg>&nbsp;LinkedIn</h3>
                        <ul class="list-unstyled">
                            <li><a href="https://id.linkedin.com/company/sekolah-hamidah-sampurna">Sekolah Hamidah Sampurna</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.9871793858033!2d107.63905587377245!3d-7.010790168669856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ebc51e8b6ef7%3A0x5df941bf736c17b0!2sSekolah%20Hamidah%20Sampurna!5e0!3m2!1sen!2sid!4v1745321555111!5m2!1sen!2sid"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2025 Sekolah Hamidah Sampurna</p>
            </div>
        </div>
    </footer>
    <div id="preloader"
        style="position:fixed;top:0;left:0;width:100%;height:100%;background:white;display:flex;justify-content:center;align-items:center;z-index:9999;transition:opacity 0.5s ease;">
        <div style="position:relative;width:450px;user-select:none;"><img
                src="{{ asset('/theme') }}/img/Logo%20Hamidah%20Website.png" alt="Logo"
                style="width:100%;height:auto;animation:pulse 1.5s ease-in-out infinite;-webkit-user-drag:none;pointer-events:none;"
                draggable="false">
            <div
                style="position:absolute;top:0;left:0;width:100%;height:100%;background:transparent;pointer-events:all;cursor:default;">
            </div>
        </div>
    </div>
    

    {{-- <audio id="backgroundMusic" loop>
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

        function toggleMusic() {
            const isPaused = audio.paused;
            if (isPaused) {
                audio.play().then(() => {
                    setPlayingUI();
                    localStorage.setItem('musicState', 'playing');
                });
            } else {
                audio.pause();
                setPausedUI();
                localStorage.setItem('musicState', 'paused');
            }
        }
        
        musicButton.addEventListener('click', toggleMusic);

        const lastState = localStorage.getItem('musicState');
        if (lastState === 'paused') {
            setPausedUI();
        } else {
            audio.play().then(() => {
                setPlayingUI();
                localStorage.setItem('musicState', 'playing');
            }).catch(error => {
                setPausedUI();
                localStorage.setItem('musicState', 'paused');
            });
        }
        
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                if (!audio.paused) {
                    wasPlayingBeforeHidden = true;
                    audio.pause();
                }
            } else {
                if (wasPlayingBeforeHidden) {
                    audio.play();
                    wasPlayingBeforeHidden = false;
                }
            }
        });
    });
</script> --}}


    <script>
        // Tambahkan animasi pulse ke <style> tag secara dinamis
        const style = document.createElement('style');
        style.innerHTML = `
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.1); }
      100% { transform: scale(1); }
    }
  `;
        document.head.appendChild(style);

        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            const content = document.getElementById('content');

            setTimeout(() => {
                preloader.style.opacity = '0';
                preloader.style.visibility = 'hidden';
                content.style.display = 'block';
            }, 200);
        });



    window.addEventListener('load', function() {
        const alert = document.getElementById('success-alert');

        if (alert) {
            setTimeout(() => {
                alert.style.opacity = '0'; 
                
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 500); 

            }, 5000); 
        }
    });
    </script>
    <script src="{{ asset('/theme') }}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('/theme') }}/js/bold-and-bright.js"></script>
    <script src="{{ asset('/theme') }}/js/Simple-Slider-swiper-bundle.min.js"></script>
    <script src="{{ asset('/theme') }}/js/Simple-Slider.js"></script>
    <script src="{{ asset('/theme') }}/js/count.js"></script>
    <script src="{{ asset('/theme') }}/js/akademik.js"></script>
</body>

</html>
