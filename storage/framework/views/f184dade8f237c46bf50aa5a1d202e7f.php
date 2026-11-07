
<?php $__env->startSection('title', 'Edit Kegiatan'); ?>

<?php $__env->startSection('content'); ?>
<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Form Edit Kegiatan</h3>
    </div>
    <form action="<?php echo e(route('admin.kegiatan.update', $kegiatan->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="card-body">
            <div class="form-group">
                <label for="title">Judul Kegiatan</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo e($kegiatan->title); ?>" required>
            </div>
       
            <div class="form-group">
                <label for="full_description">Deskripsi Lengkap</label>
                <textarea class="form-control" id="full_description" name="full_description" rows="6" required><?php echo e($kegiatan->full_description); ?></textarea>
            </div>

            <div class="form-group">
                <label>Gambar Saat Ini</label>
                <div class="d-flex flex-wrap">
                    <?php $__currentLoopData = $kegiatan->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mr-3 mb-3 text-center">
                        <img src="<?php echo e(asset('storage/kegiatan_images/' . $image->image_path)); ?>" alt="<?php echo e($image->alt_text); ?>" style="width: 150px; height: 100px; object-fit: cover;">
                        <a href="<?php echo e(route('admin.kegiatan.image.destroy', $image->id)); ?>" class="btn btn-danger btn-sm d-block mt-1" onclick="return confirm('Yakin ingin hapus gambar ini?')">Hapus</a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="images">Tambah Gambar Baru (opsional)</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="images" name="images[]" multiple>
                        <label class="custom-file-label" for="images">Pilih file</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?php echo e(route('admin.kegiatan.index')); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    // Script untuk menampilkan nama file pada custom file input
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var files = e.target.files;
        var fileNames = [];
        for (var i = 0; i < files.length; i++) {
            fileNames.push(files[i].name);
        }
        var label = document.querySelector('.custom-file-label');
        if (fileNames.length > 0) {
            label.textContent = fileNames.join(', ');
        } else {
            label.textContent = 'Pilih file';
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/kegiatan/edit.blade.php ENDPATH**/ ?>