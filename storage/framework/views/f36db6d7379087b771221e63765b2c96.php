

<?php $__env->startSection('title', $integrasi->title); ?>

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('/theme')); ?>/css/pendidikan.css">

<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title"><?php echo e($integrasi->title); ?></h1>
        <nav class="breadcrumb">
            <a href="/">Home</a> >
            <a href="<?php echo e(route('integrasi.list')); ?>">Integrasi</a> >
            <span><?php echo e($integrasi->title); ?></span>
        </nav>
    </div>
</section>

<section class="school-life-section">
    <h2 class="main-title">Integrasi Teknologi</h2>
    
</section>

<div class="article-container">
    <div class="image-wrapper">
        <img src="<?php echo e(asset('storage/integrasi_teknologi_images/' . $integrasi->image)); ?>" alt="<?php echo e($integrasi->title); ?>" class="main-image">
        

        <div class="date-overlay">
            <span class="day-month"><?php echo e(\Carbon\Carbon::parse($integrasi->published_date)->format('d M')); ?></span>
            <span class="year"><?php echo e(\Carbon\Carbon::parse($integrasi->published_date)->format('Y')); ?></span>
        </div>
    </div>
    <div class="content-wrapper">
        <span class="category-tag">Sains</span>
        
        <p><strong><?php echo e($integrasi->short_description); ?></strong></p>

        
        <p><?php echo $integrasi->content; ?></p>

        <p class="credits">
            <strong>Penulis:</strong> <?php echo e($integrasi->author ?? 'Tim Redaksi'); ?> |
            <strong>Editor:</strong> <?php echo e($integrasi->editor ?? 'Tim Redaksi'); ?> |
            <strong>Foto:</strong> <?php echo e($integrasi->photographer ?? 'Dokumentasi'); ?>

        </p>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/contoh-integrasi.blade.php ENDPATH**/ ?>