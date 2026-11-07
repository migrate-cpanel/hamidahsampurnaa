

<?php $__env->startSection('title', 'Daftar Galeri Kegiatan'); ?>

<?php $__env->startSection('breadcrums'); ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Galeri Kegiatan</h1>
        </div>
        <div class="col-sm-6">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <a href="<?php echo e(route('admin.kegiatan.create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Kegiatan Baru</a>
    </div>
    <div class="card-body">
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <table id="table1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar Terbaru</th> 
                    <th>Judul</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $kegiatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kegiatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td>
                        
                        <?php if(!$kegiatan->images->isEmpty()): ?>
                            <img src="<?php echo e(asset('storage/kegiatan_images/' . $kegiatan->images->first()->image_path)); ?>" 
                                alt="<?php echo e($kegiatan->title); ?>" 
                                style="width: 150px; height: 90px; object-fit: cover; border-radius: 5px;">
                        <?php else: ?>
                            <span class="text-muted">Tidak ada gambar</span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($kegiatan->title); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.kegiatan.show', $kegiatan->id)); ?>" class="btn btn-sm btn-info">Detail</a>
                        <a href="<?php echo e(route('admin.kegiatan.edit', $kegiatan->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger" onclick="confirmDelete(event, '<?php echo e(route('admin.kegiatan.destroy', $kegiatan->id)); ?>')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    function confirmDelete(event, url) {
        event.preventDefault();
        Swal.fire({
            title: 'Anda yakin?',
            text: "Data ini akan dihapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/kegiatan/index.blade.php ENDPATH**/ ?>