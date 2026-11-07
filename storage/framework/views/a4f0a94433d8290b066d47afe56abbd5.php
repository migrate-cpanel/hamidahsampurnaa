

<?php $__env->startSection('title', 'Pendidikan'); ?>

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('/theme')); ?>/css/pendidikan.css">

<section class="hero-section">
     <div class="hero-content">
         <h1 class="hero-title">Pendidikan Berbasis Nilai Islam</h1>
         <nav class="breadcrumb">
             <a href="/">Home</a> >
             <span>Pendidikan</span>
         </nav>
     </div>
 </section>

  <section class="school-life-section">
     <h2 class="main-title">Pendidikan</h2>
     <p class="intro-text">
         Menanamkan karakter mulia melalui pembiasaan ibadah, akhlak baik, dan cinta Al-Qur’an dalam kehidupan sehari-hari.
     </p>
  </section>

<div class="innovation-wrapper">
    <div class="innovation-grid">
        <?php $__currentLoopData = $pendidikans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendidikan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('pendidikan.detail', ['pendidikan' => $pendidikan->slug])); ?>" class="card-link">
                <div class="innovation-item">
                    <img src="<?php echo e(asset('storage/pendidikan_images/' . $pendidikan->image)); ?>" alt="<?php echo e($pendidikan->title); ?>">
                    <h3><?php echo e($pendidikan->title); ?></h3>
                    <p><?php echo e($pendidikan->short_description); ?></p>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    
    <div class="pagination-controls" style="justify-content: center;">
        <?php echo e($pendidikans->links()); ?>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/pendidikan-berbasis-nilai-islam.blade.php ENDPATH**/ ?>