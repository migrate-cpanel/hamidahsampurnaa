
<?php $__env->startSection('title', 'Berita'); ?>

<?php $__env->startSection('breadcrums'); ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Berita</h1>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <a href="<?php echo e(route('news.create')); ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Data</a>
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
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->title); ?></td>
                        <td><?php echo e($item->short_description); ?></td>
                        <td>
                            <img src="<?php echo e(asset('storage/news_images/' . $item->image)); ?>" alt="Foto"
                                 height="50" width="80" style="object-fit: cover;">
                        </td>
                        <td><?php echo e(\Carbon\Carbon::parse($item->published_date)->format('d M Y')); ?></td>
                        <td class="text-center">
                            <a href="<?php echo e(route('news.show', $item->id)); ?>" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                            <a href="<?php echo e(route('news.edit', $item->id)); ?>" class="btn btn-xs btn-warning" title="Edit"><i class="fas fa-edit"></i></a>
                            <button onclick="del(<?php echo e($item->id); ?>)" class="btn btn-xs btn-danger" title="Hapus"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <?php echo e($data->links()); ?>

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
                    // Pastikan route ini benar sesuai file web.php Anda
                    var url = "<?php echo e(route('news.delete', ':id')); ?>"; 
                    url = url.replace(':id', id);
                    window.location.href = url;
                }
            });
        }
        
        // Notifikasi setelah aksi berhasil (opsional, tapi bagus untuk ada)
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
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/news/index.blade.php ENDPATH**/ ?>