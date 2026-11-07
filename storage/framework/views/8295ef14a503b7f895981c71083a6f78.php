

<?php $__env->startSection('title', $event->title); ?> 

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('/theme')); ?>/css/contoh-event.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title"><?php echo e($event->title); ?></h1>
        <nav class="breadcrumb">
            <a href="/">Home</a> >
            <a href="<?php echo e(route('event.list')); ?>">Event</a> >
            <span><?php echo e($event->title); ?></span>
        </nav>
    </div>
</section>

<section class="school-life-section">
    <h2 class="main-title">Event</h2>
</section>

<div class="article-container">
    <div class="image-wrapper">
        <img src="<?php echo e(asset('storage/event_images/' . $event->image)); ?>" alt="<?php echo e($event->title); ?>" class="main-image">
        <div class="date-overlay">
            <span class="day-month"><?php echo e($event->start_datetime->format('d M')); ?></span>
            <span class="year"><?php echo e($event->start_datetime->format('Y')); ?></span>
        </div>
    </div>
    <div class="content-wrapper">
        <span class="category-tag">Event</span>

        
        <p><strong><?php echo e($event->short_description); ?></strong></p>

        
        <div><?php echo $event->content; ?></div>

        <div class="event-info">
            <h2>EVENT INFO :</h2>
            <div class="info-item">
                <i class="fa fa-calendar"></i>
                <span><strong>Start Date:</strong> <?php echo e($event->start_datetime->format('d F Y')); ?></span>
            </div>
            <div class="info-item">
                <i class="fa fa-clock-o"></i>
                <span><strong>Start Time:</strong> <?php echo e($event->start_datetime->format('H:i')); ?></span>
            </div>
            <div class="info-item">
                <i class="fa fa-calendar"></i>
                <span><strong>End Date:</strong> <?php echo e($event->end_datetime->format('d F Y')); ?></span>
            </div>
            <div class="info-item">
                <i class="fa fa-clock-o"></i>
                <span><strong>End Time:</strong> <?php echo e($event->end_datetime->format('H:i')); ?></span>
            </div>
            <div class="info-item">
                <i class="fa fa-map-marker"></i>
                <span><strong>Location:</strong> <?php echo e($event->location); ?></span>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/contoh-event.blade.php ENDPATH**/ ?>