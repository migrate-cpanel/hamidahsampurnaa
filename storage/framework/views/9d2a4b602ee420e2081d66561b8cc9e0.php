

<?php $__env->startSection('title', 'Kelola Logo Partner'); ?>

<?php $__env->startSection('breadcrums'); ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Kelola Logo Partner</h1>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <a href="<?php echo e(route('logos.admin.create')); ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Logo</a>
        </div>
        <div class="card-body">
            <table id="table1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="20px">No</th>
                        <th>Nama Partner</th>
                        <th>Logo (Gambar)</th>
                        <th>Tinggi (px)</th>
                        <th class="text-center" width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $logos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->name); ?></td>
                            <td>
                                
                                <a href="#" data-toggle="modal" data-target="#logoModal<?php echo e($item->id); ?>" title="Perbesar Gambar">
                                    <img src="<?php echo e(asset('storage/logo_images/' . $item->image)); ?>" alt="<?php echo e($item->name); ?>"
                                         height="<?php echo e($item->height); ?>" style="max-width: 150px; background: #f0f0f0; padding: 5px; border-radius: 5px;">
                                </a>
                            </td>
                            <td><?php echo e($item->height); ?> px</td>
                            <td class="text-center">
                                <a href="<?php echo e(route('logos.admin.edit', ['id' => $item->id])); ?>" class="btn btn-xs btn-warning"
                                   title="Edit"><i class="fas fa-edit"></i> </a>
                                
                                <button onclick="del(<?php echo e($item->id); ?>)" class="btn btn-xs btn-danger" title="Hapus"><i
                                        class="fas fa-trash"></i> </button>
                            </td>
                        </tr>

                        
                        <div class="modal fade" id="logoModal<?php echo e($item->id); ?>" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Logo: <?php echo e($item->name); ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="<?php echo e(asset('storage/logo_images/' . $item->image)); ?>" 
                                             alt="<?php echo e($item->name); ?>" style="max-width: 100%;">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        function del(id) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Logo yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = "<?php echo e(route('logos.admin.destroy', ':id')); ?>";
                    url = url.replace(':id', id);
                    window.location.href = url;
                }
            });
        }
        
        <?php if(session('add_sukses')): ?>
            Swal.fire('Berhasil!', 'Logo berhasil ditambahkan.', 'success');
        <?php endif; ?>

        <?php if(session('edit_sukses')): ?>
             Swal.fire('Berhasil!', 'Logo berhasil diperbarui.', 'success');
        <?php endif; ?>

        <?php if(session('delete_sukses')): ?>
             Swal.fire('Berhasil!', 'Logo berhasil dihapus.', 'success');
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/logos/index.blade.php ENDPATH**/ ?>