

<?php $__env->startSection('title', 'Detail Kegiatan'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Detail: <?php echo e($kegiatan->title); ?></h3>
        <div class="card-tools">
            <a href="<?php echo e(route('admin.kegiatan.index')); ?>" class="btn btn-secondary">Kembali ke Daftar</a>
        </div>
    </div>
    <div class="card-body">
        <h4>Judul</h4>
        <p><?php echo e($kegiatan->title); ?></p>
        <hr>



        <h4>Deskripsi Lengkap</h4>
        <p><?php echo nl2br(e($kegiatan->full_description)); ?></p> 
        <hr>

        <h4>Gambar-gambar</h4>
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $kegiatan->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-3 mb-3">
                    
                    <a href="#" data-toggle="modal" data-target="#imageModal" data-src="<?php echo e(asset('storage/kegiatan_images/' . $image->image_path)); ?>">
                        <img src="<?php echo e(asset('storage/kegiatan_images/' . $image->image_path)); ?>" class="img-fluid img-thumbnail" alt="<?php echo e($image->alt_text); ?>" style="height: 150px; width: 100%; object-fit: cover;">
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-12">
                    <p>Tidak ada gambar untuk kegiatan ini.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <img id="modalImage" src="" class="img-fluid" alt="Gambar Detail">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 15px; right: 20px; color: white; font-size: 2rem; text-shadow: 2px 2px 4px #000;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    // Script untuk modal gambar
    $('#imageModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Tombol yang memicu modal (dalam kasus ini, link gambar)
        var imageUrl = button.data('src'); // Ekstrak info dari atribut data-*
        
        var modal = $(this);
        modal.find('#modalImage').attr('src', imageUrl);
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/kegiatan/show.blade.php ENDPATH**/ ?>