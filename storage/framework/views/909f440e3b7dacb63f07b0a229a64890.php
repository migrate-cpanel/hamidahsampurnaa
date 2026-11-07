

<?php $__env->startSection('title', $berita->title); ?>

<?php $__env->startSection('content'); ?>


<link rel="stylesheet" href="<?php echo e(asset('theme/css/pendidikan.css')); ?>">

<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title"><?php echo e($berita->title); ?></h1>
        <nav class="breadcrumb">
            
            <a href="<?php echo e(route('berita')); ?>">Berita</a> >
            <span><?php echo e($berita->title); ?></span>
        </nav>
    </div>
</section>

<section class="school-life-section">
    <h2 class="main-title">Berita</h2>
    
</section>

<div class="article-container">
    <div class="image-wrapper">
        
        <img src="<?php echo e(asset('storage/news_images/' . $berita->image)); ?>" alt="<?php echo e($berita->title); ?>" class="main-image">
        
        <div class="date-overlay">
            <span class="day-month"><?php echo e(\Carbon\Carbon::parse($berita->published_date)->format('d M')); ?></span>
            <span class="year"><?php echo e(\Carbon\Carbon::parse($berita->published_date)->format('Y')); ?></span>
        </div>
    </div>
    <div class="content-wrapper">
        <span class="category-tag">Berita</span>
        
        <p><strong><?php echo e($berita->short_description); ?></strong></p>

        <div class="article-content">
            <?php echo $berita->content; ?>

        </div>

        <p class="credits">
            <strong>Penulis:</strong> <?php echo e($berita->author ?? 'Tim Redaksi'); ?> | 
            <strong>Editor:</strong> <?php echo e($berita->editor ?? 'Tim Redaksi'); ?> | 
            <strong>Foto:</strong> <?php echo e($berita->photographer ?? 'Dokumentasi'); ?>

        </p>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/contoh-berita.blade.php ENDPATH**/ ?>