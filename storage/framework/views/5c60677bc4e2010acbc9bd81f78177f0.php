

<?php $__env->startSection('title', 'Sains'); ?>

<?php $__env->startSection('breadcrums'); ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Sains</h1>
        </div>
        <div class="col-sm-6">
            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <a href="<?php echo e(route('sains.admin.create')); ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="table1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="20px">No</th>
                        <th>Judul</th>
                        <th>Tempat & Tanggal Upload</th>
                        <th>Gambar</th>
                        <th>Tanggal Publikasi</th>
                        <th class="text-center" width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $sains; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->title); ?></td>
                            <td><?php echo e($item->short_description); ?></td>
                            <td>
                                <img src="<?php echo e(asset('storage/sain_images/' . $item->image)); ?>" alt="Foto"
                                     height="50" width="80" style="object-fit: cover;">
                            </td>
                            <td><?php echo e(\Carbon\Carbon::parse($item->published_date)->format('d M Y')); ?></td>
                            <td class="text-center">
                                
                                    <a href="<?php echo e(route('sains.admin.show', ['id' => $item->id])); ?>" class="btn btn-xs btn-info"
                                    title="Detail"><i class="fas fa-eye"></i> </a>

                                    <a href="<?php echo e(route('sains.admin.edit', ['id' => $item->id])); ?>" class="btn btn-xs btn-warning"
                                    title="Edit"><i class="fas fa-edit"></i> </a>
                                    
                                    <button onclick="del(<?php echo e($item->id); ?>)" class="btn btn-xs btn-danger" title="Hapus"><i
                                            class="fas fa-trash"></i> </button>
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
                    var url = "<?php echo e(route('sains.admin.destroy', ':id')); ?>";
                    url = url.replace(':id', id);
                    window.location.href = url;
                }
            });
        }
        
        <?php if(session('add_sukses')): ?>
            Swal.fire('Berhasil!', 'Data berhasil ditambahkan.', 'success');
        <?php endif; ?>

        <?php if(session('edit_sukses')): ?>
            Swal.fire('Berhasil!', 'Data berhasil diperbarui.', 'success');
        <?php endif; ?>

        <?php if(session('delete_sukses')): ?>
            Swal.fire('Berhasil!', 'Data berhasil dihapus.', 'success');
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/sains/index.blade.php ENDPATH**/ ?>