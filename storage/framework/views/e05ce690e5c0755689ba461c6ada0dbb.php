

<?php $__env->startSection('title', 'berita'); ?>

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('/theme')); ?>/css/berita.css">

    

    <section class="berita-section">
        <div class="container">
            <h2 class="section-title">Berita</h2>
        </div>
    </section>
    
    
<div class="innovation-wrapper">
    <div class="innovation-grid">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('berita.detail', $item->slug)); ?>" class="card-link">
            <div class="innovation-item">
                
                
                <?php if(!empty($item->image)): ?>
                    <img src="<?php echo e(asset('storage/news_images/' . $item->image)); ?>" alt="<?php echo e($item->title); ?>">
                <?php else: ?>
                    <img src="<?php echo e(asset('img/empty.png')); ?>" alt="No Image Available">
                <?php endif; ?>
                
                <h3><?php echo e($item->title); ?></h3>

                
                <p><?php echo e($item->short_description); ?></p>

            </div>
        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


    
    <div class="pagination-controls">
        <?php echo e($data->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/berita.blade.php ENDPATH**/ ?>