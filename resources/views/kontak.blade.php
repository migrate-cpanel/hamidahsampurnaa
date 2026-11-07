@extends('main_blog')

@section('title', 'kontak')

@section('content')



{{-- <header class="page-header-image">
        <div class="header-content">
            <h1>Kontak</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kontak</li>
                </ol>
            </nav>
        </div>
    </header> --}}

   <section class="py-5">
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <br>
                <p class="fw-bold text-success mb-2">Kontak Kami</p>
                <h2 class="fw-bold">Hubungi Kami Kapan Saja</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-xl-5 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body p-4">

                        <style>

                            #success-alert {
                            transition: opacity 0.5s ease-out;
                        }

                        </style>

                        {{-- Kode untuk menampilkan pesan sukses setelah redirect --}}
                        @if (session('success'))
                            <div id="success-alert" class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        {{-- Kode untuk menampilkan error validasi jika ada input yang salah --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- UBAH BAGIAN FORM INI --}}
                        <form method="POST" action="{{ route('contact.send') }}" data-bs-theme="light">
                            @csrf  {{-- WAJIB: Token keamanan Laravel --}}

                            <div class="mb-3">
                                <input class="form-control" type="text" id="name" name="name" placeholder="Nama Anda" value="{{ old('name') }}" required>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="email" id="email" name="email" placeholder="Email Anda" value="{{ old('email') }}" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Pesan Anda" required>{{ old('message') }}</textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary shadow d-block w-100" type="submit">Kirim Pesan</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-5">
                <div class="d-flex flex-column justify-content-around h-100">
                    <div class="d-flex align-items-start p-3">
                        <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-geo-alt-fill">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg>
                        </div>
                        <div class="px-2">
                            <h6 class="fw-bold mb-1">Alamat</h6>
                            <p class="text-muted mb-0">Jl. Siliwangi No.386, Manggahang, Kec. Baleendah, Kabupaten Bandung, Jawa Barat 40375</p>
                            <a href="https://www.google.com/maps?q=Sekolah+Hamidah+Sampurna&ll=-7.01079,107.63906&z=17" target="_blank" class="text-decoration-none"><b>Lihat di Google Maps</b></a>
                        </div>
                    </div>

                    <div class="d-flex align-items-start p-3">
                         <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-whatsapp">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.068-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                        </div>
                        <div class="px-2">
                            <h6 class="fw-bold mb-1">WhatsApp</h6>
                             <a href="https://wa.me/62811241206" target="_blank" class="text-decoration-none d-block">Devina (+62 811-241-206)</a>
                             <a href="https://wa.me/6287845736686" target="_blank" class="text-decoration-none d-block">Call Center (+62 878-4573-6686)</a>
                        </div>
                    </div>

                    <div class="d-flex align-items-start p-3">
                        <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope-fill">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg>
                        </div>
                        <div class="px-2">
                             <h6 class="fw-bold mb-1">Email</h6>
                             <a href="https://mail.google.com/mail/u/0/?hl=id&tf=cm&fs=1&to=sekolahhamidahsampurna.11@gmail.com" class="text-break">sekolahhamidahsampurna.11@gmail.com</a>
                        </div>
                    </div>

                    <div class="d-flex align-items-start p-3">
                        <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-share-fill">
                                <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
                            </svg>
                        </div>
                        <div class="px-2">
                            <h6 class="fw-bold mb-2">Media Sosial</h6>
                            <div class="d-flex">
                                <a href="https://www.instagram.com/hamidahsampurna/" target="_blank" class="text-decoration-none me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.231s.008-2.389.046-3.232c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.884a1.15 1.15 0 1 0 0 2.299 1.15 1.15 0 0 0 0-2.3zM8 3.882a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                    </svg>
                                </a>
                                <a href="https://www.youtube.com/channel/UCbxFmBvjscLr-XCCC58YqSw" target="_blank" class="text-decoration-none me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                        <path d="M8.051 1.999a.614.614 0 0 0-.42 0l-6.568 4.04A.613.613 0 0 0 1.5 6.542V14a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V6.542a.613.613 0 0 0-.083-.342l-6.568-4.04zm4.491 5.328-3.958 2.433V8.51l3.958-2.433zM3.5 13.5V8.51l3.958 2.433v2.556zM8 5.482l3.958-2.433L8 3.049 4.042 5.482z"/>
                                    </svg>
                                </a>
                                <a href="https://www.facebook.com/sekolahhamidahsampurna" target="_blank" class="text-decoration-none me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                    </svg>
                                </a>
                                <a href="https://www.tiktok.com/@sekolahhamidah?is_from_webapp=1&sender_device=pc" target="_blank" class="text-decoration-none me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                        <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                                    </svg>
                                </a>
                                <a href="https://id.linkedin.com/company/sekolah-hamidah-sampurna" target="_blank" class="text-decoration-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
