

<?php $__env->startSection('title', $sain->title); ?>

<?php $__env->startSection('content'); ?>


<link rel="stylesheet" href="<?php echo e(asset('/theme')); ?>/css/pendidikan.css">

<section class="hero-section"> 
    <div class="hero-content">
        <h1 class="hero-title"><?php echo e($sain->title); ?></h1>
        <nav class="breadcrumb">
            <a href="/">Home</a> >
            <a href="<?php echo e(route('sains.public.index')); ?>">Sains</a> >
            <span><?php echo e($sain->title); ?></span>
        </nav>
    </div>
</section>

<section class="school-life-section">
    <h2 class="main-title">Sains</h2>
    
</section>

<div class="article-container">
    <div class="image-wrapper">
        <img src="<?php echo e(asset('storage/sain_images/' . $sain->image)); ?>" alt="<?php echo e($sain->title); ?>" class="main-image">
        

        <div class="date-overlay">
            <span class="day-month"><?php echo e(\Carbon\Carbon::parse($sain->published_date)->format('d M')); ?></span>
            <span class="year"><?php echo e(\Carbon\Carbon::parse($sain->published_date)->format('Y')); ?></span>
        </div>
    </div>
    <div class="content-wrapper">
        <span class="category-tag">Sains</span>
        
        
        <p><strong><?php echo e($sain->short_description); ?></strong></p>

        
        <p><?php echo $sain->content; ?></p>

        <p class="credits">
            <strong>Penulis:</strong> <?php echo e($sain->author ?? 'Tim Redaksi'); ?> |
            <strong>Editor:</strong> <?php echo e($sain->editor ?? 'Tim Redaksi'); ?> |
            <strong>Foto:</strong> <?php echo e($sain->photographer ?? 'Dokumentasi'); ?>

        </p>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/contoh-sains.blade.php ENDPATH**/ ?>