<?php $__env->startSection('title', 'Laporan Pengunjung'); ?>

<?php $__env->startSection('breadcrums'); ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Laporan Pengunjung</h1>
        </div>
        <div class="col-sm-6">
            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Kunjungan Harian</h3>
        </div>
        <div class="card-body">
            <table id="table1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="20px">No</th>
                        <th>Tanggal</th>
                        <th>Jumlah Kunjungan</th>
                        <th class="text-center" width="100px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $visits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e(\Carbon\Carbon::parse($item->visit_date)->translatedFormat('l, d F Y')); ?></td>
                            <td><?php echo e($item->total_visits); ?></td>
                            <td class="text-center">
                                <button onclick="del('<?php echo e($item->visit_date); ?>')" class="btn btn-xs btn-danger" title="Hapus Log Hari Ini">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer clearfix">
            <?php echo e($visits->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        function del(date) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Semua log kunjungan pada tanggal " + date + " akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = "<?php echo e(route('visitor.logs.destroy', ':date')); ?>";
                    url = url.replace(':date', date);
                    window.location.href = url;
                }
            });
        }

        <?php if(session('delete_sukses')): ?>
            Swal.fire('Berhasil!', 'Data kunjungan berhasil dihapus.', 'success');
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/visitors/index.blade.php ENDPATH**/ ?>