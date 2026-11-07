

<?php $__env->startSection('title', 'Event'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('/theme/css/event.css?v=1.1')); ?>">

<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">Event</h1>
        <nav class="breadcrumb">
            <a href="/">Home</a> >
            <span>Event</span>
        </nav>
    </div>
</section>

<section class="school-life-section">
    <h2 class="main-title">Event</h2>
    <p class="intro-text">
        Sebagai bagian dari upaya mendukung pembentukan karakter dan potensi siswa, Sekolah Hamidah Sampurna secara rutin menghadirkan berbagai kegiatan akademik dan non-akademik yang inspiratif, edukatif, dan menyenangkan. Mulai dari parents meeting, student fair, class meeting, market day, hingga graduation ceremony, setiap event dirancang untuk menumbuhkan kemandirian, kreativitas, dan semangat kolaborasi siswa.
    </p>
</section>

<section class="school-life-section">
    <div class="features-container">
        <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="feature-card">
                <a href="<?php echo e(route('event.detail', ['slug' => $event->slug])); ?>" class="card-image-link">
                    <img src="<?php echo e(asset('storage/event_images/' . $event->image)); ?>" alt="<?php echo e($event->title); ?>">
                    <div class="date-overlay">
                        <span class="date-day-month"><?php echo e($event->start_datetime->format('d M')); ?></span>
                        <span class="date-year"><?php echo e($event->start_datetime->format('Y')); ?></span>
                    </div>
                </a>
                <div class="card-content">
                    <h3 class="card-title">
                        <a href="<?php echo e(route('event.detail', ['slug' => $event->slug])); ?>" class="card-title-link"><?php echo e($event->title); ?></a>
                    </h3>
                    <div class="description-wrapper">
                        <p class="card-description">
                            <?php echo e(strip_tags($event->content)); ?>

                        </p>
                    </div>
                    <a href="<?php echo e(route('event.detail', ['slug' => $event->slug])); ?>" class="btn-read-more">Baca Selengkapnya</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-12">
                <p class="text-center">Tidak ada event yang ditemukan.</p>
            </div>
        <?php endif; ?>
    </div>
</section>


<div class="pagination-controls" style="justify-content: center;">
    <?php echo e($events->links()); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/event.blade.php ENDPATH**/ ?>