
<?php $__env->startSection('title', 'Detail Berita'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <a href="<?php echo e(route('news.index')); ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
        <a href="<?php echo e(route('news.edit', $news->id)); ?>" class="btn btn-warning float-right"><i class="fas fa-edit"></i> Edit Berita Ini</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr><th width="200px">Judul</th><td><?php echo e($news->title); ?></td></tr>
                    <tr><th>Slug (URL)</th><td><?php echo e($news->slug); ?></td></tr>
                    <tr><th>Tanggal Publikasi</th><td><?php echo e(\Carbon\Carbon::parse($news->published_date)->format('d F Y')); ?></td></tr>
                    <tr><th>Tempat & Tanggal Upload</th><td><?php echo e($news->short_description); ?></td></tr>
                    <tr><th>Penulis</th><td><?php echo e($news->author ?? '-'); ?></td></tr>
                    <tr><th>Editor</th><td><?php echo e($news->editor ?? '-'); ?></td></tr>
                    <tr><th>Fotografer</th><td><?php echo e($news->photographer ?? '-'); ?></td></tr>
                </table>
            </div>
            <div class="col-md-4">
                <h5>Gambar</h5>
                
                
                <img src="<?php echo e(asset('storage/news_images/' . $news->image)); ?>" class="img-fluid img-thumbnail">
            </div>
        </div>
        <hr>
        <h4>Konten Lengkap</h4>
        <div class="p-3 border bg-light">
            <?php echo nl2br(e($news->content)); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/news/show.blade.php ENDPATH**/ ?>