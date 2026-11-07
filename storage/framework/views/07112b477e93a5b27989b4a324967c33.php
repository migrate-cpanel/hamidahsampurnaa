

<?php $__env->startSection('title', 'Sains dan Pengetahuan Modern'); ?>

<?php $__env->startSection('content'); ?>


<link rel="stylesheet" href="<?php echo e(asset('/theme')); ?>/css/pendidikan.css">

<section class="hero-section" > 
    <div class="hero-content">
        <h1 class="hero-title">Sains dan Pengetahuan Modern</h1>
        <nav class="breadcrumb">
            <a href="/">Home</a> >
            <span>Sains</span>
        </nav>
    </div>
</section>

<section class="school-life-section">
    <h2 class="main-title">Sains</h2>
    <p class="intro-text">
        Meningkatkan minat dan berpikir kritis siswa lewat pendekatan tematik, eksperimen, dan proyek pembelajaran.
    </p>
</section>

<div class="innovation-wrapper">
    <div class="innovation-grid">
        <?php $__empty_1 = true; $__currentLoopData = $sains; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <a href="<?php echo e(route('sains.public.detail', ['sain' => $item->slug])); ?>" class="card-link">
                <div class="innovation-item">
                    <img src="<?php echo e(asset('storage/sain_images/' . $item->image)); ?>" alt="<?php echo e($item->title); ?>">
                    <h3><?php echo e($item->title); ?></h3>
                    <p><?php echo e($item->short_description); ?></p>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Belum ada artikel sains yang dipublikasikan.</p>
        <?php endif; ?>
    </div>

    
    <div class="pagination-controls" style="justify-content: center; margin-top: 2rem;">
        <?php echo e($sains->links()); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/sains-dan-pengetahuan-modern.blade.php ENDPATH**/ ?>