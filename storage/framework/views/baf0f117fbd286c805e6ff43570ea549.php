

<?php $__env->startSection('title', 'Sliders'); ?>

<?php $__env->startSection('breadcrums'); ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Sliders</h1>
        </div>
        <div class="col-sm-6">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <a href="<?php echo e(route('sliders.create')); ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="table1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="20px">No</th>
                        <th class="text-center">Image Url</th>
                        <th>CreatedAt</th>
                        <th>UpdatedAt</th>
                        <th class="text-center" width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td>
                                <?php if($item->image_url == ''): ?>
                                    <img class="img-fluid mb-3" src="<?php echo e(url('/img/empty.png')); ?>" alt="Photo"
                                        width="40" height="40">
                                <?php else: ?>
                                    <a href="#" data-toggle="modal" data-target="#myModal<?php echo e($item->id); ?>"
                                        title="Perbesar">
                                        <img class="rounded mx-auto d-block"
                                            src="<?php echo e(url('/img/uploads/' . $item->image_url ?? '/')); ?>" alt="Foto"
                                            height="40" width="40"></a>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($item->created_at); ?></td>
                            <td><?php echo e($item->updated_at); ?></td>
                            <td class="text-center">
                                <a href="<?php echo e(route('sliders.edit', $item->id)); ?>" class="btn btn-xs btn-warning"
    title="Edit"><i class="fas fa-edit"></i> </a>
                                <button onclick="del(<?php echo e($item->id); ?>)" class="btn btn-xs btn-danger" title="Hapus"><i
                                        class="fas fa-trash"></i> </button>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal<?php echo e($item->id); ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Image Sliders
                                        </h5>
                                        <button type="reset" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img class="zoom"
                                            src="<?php echo e(url('/img/uploads/' . $item->image_url ?? '/')); ?>" height="100%"
                                            width="100%">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-primary btn-block ml-1"
                                            data-dismiss="modal">Close</button>
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
        function add_sukses() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000
            });

            Toast.fire({
                icon: 'success',
                title: ' &nbsp; Tambah Data Berhasil'
            });
        }

        function edit_sukses() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000
            });

            Toast.fire({
                icon: 'success',
                title: ' &nbsp; Update Data Berhasil'
            });
        }

        function delete_sukses() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000
            });

            Toast.fire({
                icon: 'success',
                title: ' &nbsp; Hapus Data Berhasil'
            });
        }

        function del(id) {
            Swal.fire({
                title: "Ingin Menghapus Data ini?",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "<?php echo e(route('sliders.delete', '')); ?>/" + id;
                }
            });
        }

        function add_gagal() {
            var Toast = Swal.mixin({
                toast: false,
                //position: 'top-end',
                showConfirmButton: false,
                timer: 2000
            });

            Toast.fire({
                icon: 'error',
                title: ' &nbsp; Gagal',
                text: ' Ada Kesalahan'
            });
        }
    </script>

    <?php if(session('add_sukses')): ?>
        <script>
            add_sukses();
        </script>
    <?php endif; ?>

    <?php if(session('edit_sukses')): ?>
        <script>
            edit_sukses();
        </script>
    <?php endif; ?>

    <?php if(session('delete_sukses')): ?>
        <script>
            delete_sukses();
        </script>
    <?php endif; ?>

    <?php if(session('add_gagal')): ?>
        <script>
            add_gagal();
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/sliders/index.blade.php ENDPATH**/ ?>