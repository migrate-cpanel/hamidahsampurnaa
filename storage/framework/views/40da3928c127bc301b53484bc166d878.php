<?php $__env->startSection('title', 'Ekstrakurikuler'); ?>

<?php $__env->startSection('breadcrums'); ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Ekstrakurikuler</h1>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <a href="<?php echo e(route('ekskul.create')); ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Ekskul</a>
    </div>
    <div class="card-body">
        <div class="row">
            <?php if($ekskuls->isEmpty()): ?>
                <div class="col-12">
                    <p class="text-center">Belum ada data ekstrakurikuler.</p>
                </div>
            <?php else: ?>
                <?php $__currentLoopData = $ekskuls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="card-title font-weight-bold"><?php echo e($item->name); ?></h5>
                        </div>
                        <div class="card-body">
                            <?php if($item->images->isNotEmpty()): ?>
                                <img src="<?php echo e(asset('storage/ekskul_images/' . $item->images->first()->image_path)); ?>"
                                     class="img-fluid rounded mb-2"
                                     alt="<?php echo e($item->images->first()->alt_text); ?>"
                                     style="width: 100%; height: 200px; object-fit: cover;">
                            <?php else: ?>
                                <div class="text-center p-5 bg-light rounded">
                                    <i class="fas fa-image fa-3x text-muted"></i>
                                    <p class="text-muted">Tidak ada gambar</p>
                                </div>
                            <?php endif; ?>
                            <p class="card-text"><?php echo e(Str::limit($item->description, 100)); ?></p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="<?php echo e(route('ekskul.show', ['id' => $item->id])); ?>" class="btn btn-sm btn-info" title="Detail"><i class="fas fa-eye"></i> Detail</a>
                            <a href="<?php echo e(route('ekskul.edit', ['id' => $item->id])); ?>" class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-edit"></i> Edit</a>
                            <button onclick="del(<?php echo e($item->id); ?>)" class="btn btn-sm btn-danger" title="Hapus"><i class="fas fa-trash"></i> Hapus</button>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        function del(id) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = "<?php echo e(route('ekskul.destroy', ':id')); ?>";
                    url = url.replace(':id', id);
                    window.location.href = url;
                }
            });
        }

        <?php if(session('add_sukses')): ?>
            Swal.fire('Berhasil!', '<?php echo e(session('add_sukses')); ?>', 'success');
        <?php endif; ?>

        <?php if(session('edit_sukses')): ?>
             Swal.fire('Berhasil!', '<?php echo e(session('edit_sukses')); ?>', 'success');
        <?php endif; ?>

        <?php if(session('delete_sukses')): ?>
             Swal.fire('Berhasil!', '<?php echo e(session('delete_sukses')); ?>', 'success');
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/ekskul/index.blade.php ENDPATH**/ ?>