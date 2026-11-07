

<?php $__env->startSection('title', 'Galeri Kegiatan'); ?>

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('/theme')); ?>/css/galerisekolah.css">

<div class="gallery-intro-container-v3">
    <section class="gallery-intro-content-v3">
        <h1>Selamat Datang di Galeri Kegiatan Sekolah Hamidah Sampurna</h1>
        <p>Ruang visual yang merekam jejak semangat, kreativitas, dan kebersamaan seluruh civitas sekolah dalam berbagai momen bermakna. Di halaman ini, Anda dapat melihat dokumentasi kegiatan yang mencerminkan nilai-nilai Islami, pembelajaran aktif, serta suasana positif yang kami bangun setiap harinya.</p>
    </section>
</div>

<section class="gallery-categories">

    <?php $__empty_1 = true; $__currentLoopData = $kegiatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kegiatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class="category-card">
    <h2>
        <a href="#" class="category-link"><?php echo e($kegiatan->title); ?></a>
    </h2>

    <p class="kegiatan-description truncated"><?php echo e($kegiatan->full_description); ?></p>
    <button class="toggle-btn" style="display: none;">Selengkapnya</button>

    
    <?php if(!$kegiatan->images->isEmpty()): ?>
        <div class="gallery-wrapper">

            
            <div class="gallery-preview">
                <a href="#" class="gallery-item" data-src="<?php echo e(asset('storage/kegiatan_images/' . $kegiatan->images->first()->image_path)); ?>" data-alt="<?php echo e($kegiatan->images->first()->alt_text); ?>">
                    <img src="<?php echo e(asset('storage/kegiatan_images/' . $kegiatan->images->first()->image_path)); ?>" alt="<?php echo e($kegiatan->images->first()->alt_text); ?>">
                </a>
            </div>

            
            
            <?php if($kegiatan->images->count() > 1): ?>
                <div class="image-pagination-container gallery-hidden">
                    <?php if($kegiatan->images->count() > 6): ?>
                        <button class="page-nav-button prev-page">&#10094;</button>
                    <?php endif; ?>

                    <div class="gallery-images">
                        <?php $__currentLoopData = $kegiatan->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="#" class="gallery-item" data-src="<?php echo e(asset('storage/kegiatan_images/' . $image->image_path)); ?>" data-alt="<?php echo e($image->alt_text); ?>">
                                <img src="<?php echo e(asset('storage/kegiatan_images/' . $image->image_path)); ?>" alt="<?php echo e($image->alt_text); ?>">
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <?php if($kegiatan->images->count() > 6): ?>
                        <button class="page-nav-button next-page">&#10095;</button>
                        <div class="page-counter"></div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </div>

        
        <?php if($kegiatan->images->count() > 1): ?>
            <button class="show-more-images-button" data-status="hidden">Lihat Semua Gambar</button>
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<div class="col-12 text-center">
    <p>Saat ini belum ada data kegiatan yang tersedia.</p>
</div>
<?php endif; ?>


</section>


<div id="imageModal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <div class="modal-title"></div>
        <div class="slider-container">
            <div class="slider-image-wrapper">
                <img id="modalImage" src="" alt="Full size image">
            </div>
            <button class="prev-button">&#10094;</button>
            <button class="next-button">&#10095;</button>
            <div class="image-counter"></div>
        </div>
    </div>
</div>



<script src="<?php echo e(asset('/theme')); ?>/js/kegiatan.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/galeri-kegiatan.blade.php ENDPATH**/ ?>