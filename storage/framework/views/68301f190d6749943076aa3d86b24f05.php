

<?php $__env->startSection('title', 'Ekstrakurikuler'); ?>

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('/theme')); ?>/css/ekskul.css">

<div class="gallery-intro-container-v3">



    <section class="gallery-intro-content-v3">
        <h1>Ekstrakurikuler</h1>
        <p>Sekolah Hamidah Sampurna menghadirkan 9 program ekstrakurikuler yang dirancang untuk mendukung pembentukan karakter, pengembangan keterampilan, dan penyaluran bakat siswa di luar kegiatan belajar di kelas. Program ini mencakup aspek akademik dan non-akademik sehingga siswa dapat tumbuh menjadi pribadi yang seimbang antara pengetahuan, kreativitas, sportivitas, dan akhlak mulia. Ekstrakurikuler tersebut meliputi Taekwondo Club, Science Club, English Club, Swimming Club, Mathematic Club, Basketball Club, Robotic & IoT Club, Islamic Club, dan Roller Skating Club.</p>
    </section>
</div>


<section class="gallery-categories">

    <?php $__empty_1 = true; $__currentLoopData = $ekskuls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ekskul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class="category-card">
    <h2>
        
        <a href="#" class="category-link"><?php echo e($ekskul->name); ?></a>
    </h2>

    
    <?php if($ekskul->description): ?>
        <p class="item-description truncated"><?php echo e($ekskul->description); ?></p>
        <button class="toggle-btn" style="display: none;">Selengkapnya</button>
    <?php endif; ?>

    
    <?php if(!$ekskul->images->isEmpty()): ?>
        <div class="gallery-wrapper">

            
            <div class="gallery-preview">
                <a href="#" class="gallery-item" data-src="<?php echo e(asset('storage/ekskul_images/' . $ekskul->images->first()->image_path)); ?>" data-alt="<?php echo e($ekskul->images->first()->alt_text); ?>">
                    <img src="<?php echo e(asset('storage/ekskul_images/' . $ekskul->images->first()->image_path)); ?>" alt="<?php echo e($ekskul->images->first()->alt_text); ?>">
                </a>
            </div>

            
            <?php if($ekskul->images->count() > 1): ?>
                <div class="image-pagination-container gallery-hidden">
                    
                    <?php if($ekskul->images->count() > 6): ?>
                        <button class="page-nav-button prev-page">&#10094;</button>
                    <?php endif; ?>

                    <div class="gallery-images">
                        
                        <?php $__currentLoopData = $ekskul->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="#" class="gallery-item" data-src="<?php echo e(asset('storage/ekskul_images/' . $image->image_path)); ?>" data-alt="<?php echo e($image->alt_text); ?>">
                                <img src="<?php echo e(asset('storage/ekskul_images/' . $image->image_path)); ?>" alt="<?php echo e($image->alt_text); ?>">
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    
                    <?php if($ekskul->images->count() > 6): ?>
                        <button class="page-nav-button next-page">&#10095;</button>
                        <div class="page-counter"></div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </div>

        
        <?php if($ekskul->images->count() > 1): ?>
            <button class="show-more-images-button" data-status="hidden">Lihat Semua Gambar</button>
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<div class="col-12 text-center">
    <p>Saat ini belum ada data ekstrakurikuler yang tersedia.</p>
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

<script src="<?php echo e(asset('/theme')); ?>/js/kegiatan2.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/ekstrakurikuler.blade.php ENDPATH**/ ?>