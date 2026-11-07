<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?> - Aplikasi</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo e(asset('/adminlte')); ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('/adminlte')); ?>/plugins/select2/css/select2.min.css">
    <link rel="stylesheet"
        href="<?php echo e(asset('/adminlte')); ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo e(asset('/adminlte')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo e(asset('/adminlte')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo e(asset('/adminlte')); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('/adminlte')); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet"
        href="<?php echo e(asset('/adminlte')); ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('/adminlte')); ?>/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('/adminlte')); ?>/dist/css/adminlte.min.css">
    <link rel="stylesheet"
        href="<?php echo e(asset('/adminlte')); ?>/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
    <link rel="icon" href="<?php echo e(asset('/adminlte')); ?>/dist/img/logo.png" type="image/png" sizes="16x16">
    <style>
        .main-sidebar {
            background-color: #2a375c !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini pace-primary">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo e(route('dashboard')); ?>" class="nav-link">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown show">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="true" class="nav-link dropdown-toggle">
                        <i class="fas fa-user-circle mr-2 text-lg"></i>
                        
                        
                        
                        <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
                    </a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow"
                        style="left: 0px; right: inherit;">
                        <li>
                            <a href="#" class="dropdown-item"> 
                                <i class="nav-icon fas fa-user-secret"></i> Profil
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="#" class="dropdown-item"> 
                                <i class="nav-icon fas fa-pencil-alt"></i> Password
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            
                            
                            
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="dropdown-item">
                                    <i class="nav-icon fas fa-sign-out-alt"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link text-center">
                <span class="brand-text text-white">Aplikasi</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo e(url('/img/profil/men.png')); ?>" class="img-circle elevation-2">
                    </div>
                    <div class="info">
                        
                        
                        
                        <a href="#" class="d-block"><?php echo e(Auth::user()->name); ?>

                            <br>
                            <span class="small"><?php echo e(Auth::user()->email); ?></span>
                        </a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-header">Home</li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('dashboard')); ?>"
                                class="nav-link <?php echo e(request()->is('dashboard') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="<?php echo e(route('visitor.logs.index')); ?>"
                                class="nav-link <?php echo e(request()->is('visitor-logs*') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>Laporan Pengunjung</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('aspirasi.admin.index')); ?>"
                                class="nav-link <?php echo e(request()->is('admin/aspirasi*') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-bullhorn"></i> 
                                <p>Laporan Aspirasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('sliders.index')); ?>"
                                class="nav-link <?php echo e(request()->is('admin/sliders*') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-sliders-h"></i>
                                <p>Sliders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('news.index')); ?>"
                                class="nav-link <?php echo e(request()->is('admin/news*') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>Berita</p>
                            </a>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a href="<?php echo e(route('pendidikan.admin.index')); ?>"
                                class="nav-link <?php echo e(request()->is('pendidikan*') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-graduation-cap"></i>
                                <p>Pendidikan</p>
                            </a>
                        </li>
                       <li class="nav-item">
                            <a href="<?php echo e(route('ekskul.index')); ?>"
                               class="nav-link <?php echo e(request()->is('ekskul*') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-running"></i> 
                                <p>Ekstrakurikuler</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('event.index')); ?>"
                            class="nav-link <?php echo e(request()->is('events*') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-calendar-alt"></i> 
                                <p>Event</p>
                            </a>
                        </li>
                        <li class="nav-item">
                                <a href="<?php echo e(route('admin.kegiatan.index')); ?>"
                                   class="nav-link <?php echo e(request()->is('admin.kegiatan*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-images"></i> 
                                    <p>Galeri Kegiatan</p>
                                </a>
                            </li>
                        
                        <li class="nav-item">
                            <a href="<?php echo e(route('sains.admin.index')); ?>"
                               class="nav-link <?php echo e(request()->is('admin/sains*') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-flask"></i> 
                                <p>Sains</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="<?php echo e(route('integrasi.admin.index')); ?>"
                               class="nav-link <?php echo e(request()->is('admin/integrasi-teknologi*') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-cogs"></i> 
                                <p>Integrasi Teknologi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                                    <a href="<?php echo e(route('struktur.admin.index')); ?>"
                                       class="nav-link <?php echo e(request()->is('admin/struktur-organisasi*') ? 'active' : ''); ?>">
                                        <i class="nav-icon fas fa-sitemap"></i> 
                                        <p>Struktur Organisasi</p>
                                    </a>
                                </li>
                        
                        <li class="nav-item">
                            <a href="<?php echo e(route('logos.admin.index')); ?>"
                                class="nav-link <?php echo e(request()->is('admin/logos*') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-handshake"></i>
                                <p>Logo Partner</p>
                            </a>
                        </li>
                        
                        <li class="nav-header">User & Group</li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('pengguna.index')); ?>"
                                class="nav-link <?php echo e(request()->is('admin/pengguna*') ? 'active' : ''); ?>">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            
                            
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link text-danger">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>Logout</p>
                                </a>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <?php echo $__env->yieldContent('breadcrums'); ?>
                </div>
            </section>
            <section class="content">
                <?php echo $__env->yieldContent('content'); ?>
            </section>
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline"></div>
            <strong>Copyright &copy; 2024 <a href="#">Aplikasi</a>.</strong> All rights reserved.
        </footer>
    </div>

    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/dist/js/adminlte.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/toastr/toastr.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/pace-progress/pace.min.js"></script>
    <script src="<?php echo e(asset('/style')); ?>/plugins/chart.js/Chart.min.js"></script>
    <script src="<?php echo e(asset('/adminlte')); ?>/plugins/chart.js/Chart.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/ed2g2cqy88n02ce6muzbj3ehxautstpqrw6a1zhsnblg46cs/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    

    <script>
        $(function() {
            $('#table1').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

            $('.select2').select2()
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });
    </script>

    <?php echo $__env->yieldContent('script'); ?>

    <script>
    // Tunggu hingga dokumen siap
    document.addEventListener('DOMContentLoaded', (event) => {
        // Cari elemen alert
        const successAlert = document.querySelector('.alert-success');
        
        // Jika elemen alert ada
        if (successAlert) {
            // Set timeout untuk 5 detik (5000 milidetik)
            setTimeout(() => {
                // Tambahkan class untuk animasi fade out (jika ada) dan sembunyikan
                successAlert.style.transition = 'opacity 0.5s ease';
                successAlert.style.opacity = '0';
                setTimeout(() => successAlert.remove(), 500); // Hapus elemen setelah transisi selesai
            }, 5000);
        }
    });
</script>


</body>
</html><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/layout/main.blade.php ENDPATH**/ ?>