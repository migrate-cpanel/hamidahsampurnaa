

<?php $__env->startSection('title', 'Integrasi Teknologi'); ?>

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('/theme')); ?>/css/pendidikan.css">

<section class="hero-section">
     <div class="hero-content">
         <h1 class="hero-title">Integrasi Teknologi</h1>
         <nav class="breadcrumb">
             <a href="/">Home</a> >
             <span>Integrasi</span>
         </nav>
     </div>
 </section>

  <section class="school-life-section">
     <h2 class="main-title">Integrasi Teknologi</h2>
     <p class="intro-text">
         Mengoptimalkan e-book, smartbook, dan aplikasi digital untuk mendukung pembelajaran di era digital secara bijak.
     </p>
  </section>

<div class="innovation-wrapper">
    <div class="innovation-grid">
        <?php $__currentLoopData = $integrasiTeknologis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('integrasi.detail', ['slug' => $item->slug])); ?>" class="card-link">
                <div class="innovation-item">
                    <img src="<?php echo e(asset('storage/integrasi_teknologi_images/' . $item->image)); ?>" alt="<?php echo e($item->title); ?>">
                    <h3><?php echo e($item->title); ?></h3>
                    <p><?php echo e($item->short_description); ?></p>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    
    <div class="pagination-controls" style="justify-content: center;">
        <?php echo e($integrasiTeknologis->links()); ?>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/integrasi-teknologi.blade.php ENDPATH**/ ?>