



<?php $__env->startSection('title', 'Laporan Aspirasi'); ?>

<?php $__env->startSection('breadcrums'); ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Laporan Aspirasi</h1>
        </div>
        <div class="col-sm-6">
            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Aspirasi Masuk</h3>
        </div>
        <div class="card-body">
            <table id="table1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="20px">No</th>
                        <th>Pengirim</th>
                        <th>Peran</th>
                        <th>Kategori</th>
                        <th>Tanggal Masuk</th>
                        <th class="text-center" width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $aspirasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->nama_lengkap); ?></td>
                            <td><?php echo e($item->peran); ?></td>
                            <td><?php echo e($item->kategori_aspirasi == 'Lainnya' ? $item->kategori_lainnya : $item->kategori_aspirasi); ?></td>
                            <td><?php echo e(\Carbon\Carbon::parse($item->created_at)->format('d M Y H:i')); ?></td>
                            <td class="text-center">
                                <a href="<?php echo e(route('aspirasi.admin.show', ['id' => $item->id])); ?>" class="btn btn-xs btn-info"
                                    title="Lihat Detail"><i class="fas fa-eye"></i> </a>
                                
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
                    var url = "<?php echo e(route('aspirasi.admin.destroy', ':id')); ?>";
                    url = url.replace(':id', id);
                    window.location.href = url;
                }
            });
        }
        
        <?php if(session('delete_sukses')): ?>
            Swal.fire('Berhasil!', 'Data berhasil dihapus.', 'success');
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/aspirasi/index.blade.php ENDPATH**/ ?>