

<?php $__env->startSection('title', 'Detail Event'); ?>

<?php $__env->startSection('breadcrums'); ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Detail Event</h1>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Informasi Detail Event</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 200px;">Judul Event</th>
                    <td><?php echo e($event->title); ?></td>
                </tr>
                <tr>
                    <th>Waktu Mulai</th>
                    <td><?php echo e($event->start_datetime->format('d F Y, H:i')); ?></td>
                </tr>
                <tr>
                    <th>Waktu Selesai</th>
                    <td><?php echo e($event->end_datetime->format('d F Y, H:i')); ?></td>
                </tr>
                <tr>
                    <th>Lokasi Event</th>
                    <td><?php echo e($event->location); ?></td>
                </tr>
                <tr>
                    <th>Tempat & Tanggal Upload</th>
                    <td><?php echo e($event->short_description); ?></td>
                </tr>
                <tr>
                    <th>Konten Lengkap</th>
                    <td><?php echo $event->content; ?></td>
                </tr>
                <tr>
                    <th>Gambar</th>
                    <td>
                        <?php if($event->image): ?>
                            <img src="<?php echo e(asset('storage/event_images/' . $event->image)); ?>" alt="Event Image" style="max-width: 400px; height: auto;">
                        <?php else: ?>
                            Tidak ada gambar.
                        <?php endif; ?>
                    </td>
                </tr>
                 <tr>
                    <th>Dibuat Pada</th>
                    <td><?php echo e($event->created_at->format('d F Y, H:i')); ?></td>
                </tr>
                <tr>
                    <th>Diperbarui Pada</th>
                    <td><?php echo e($event->updated_at->format('d F Y, H:i')); ?></td>
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <a href="<?php echo e(route('event.index')); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/event/show.blade.php ENDPATH**/ ?>