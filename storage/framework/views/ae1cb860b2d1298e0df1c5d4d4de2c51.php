

<?php $__env->startSection('title', 'Kelola Gambar Struktur Organisasi'); ?>

<?php $__env->startSection('breadcrums'); ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Kelola Gambar Struktur Organisasi</h1>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<style>
    /* Membuat container gambar memiliki lebar maksimal dan berada di tengah */
    .responsive-container {
        max-width: 800px; /* Lebar maksimal di layar besar */
        margin-left: auto;
        margin-right: auto;
    }

    /* Membuat gambar fleksibel dan responsif */
    .responsive-img {
        width: 100%; /* Lebar gambar selalu 100% dari container-nya */
        height: auto; /* Tinggi menyesuaikan secara otomatis */
        border: 1px solid #ddd;
        padding: 5px;
        border-radius: 5px;
    }
</style>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Gambar Struktur Organisasi Saat Ini</h3>
        </div>
        <div class="card-body">
            <?php if($struktur): ?>
                
                
                <div class="text-center mb-4 responsive-container">
                    <p>Ini adalah gambar yang sedang ditampilkan di halaman depan.</p>
                    
                    <img src="<?php echo e(asset('storage/struktur_images/' . $struktur->image)); ?>" alt="Struktur Organisasi"
                         class="responsive-img">
                </div>

                <hr>

                
                <form action="<?php echo e(route('struktur.admin.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="image">Ganti Gambar Struktur Organisasi</label>
                        <input type="file" name="image" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <small class="form-text text-muted">Upload gambar baru untuk menggantikan yang lama. Tipe file: JPG, PNG, GIF. Maks: 2MB.</small>
                    </div>
                    <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i> Ganti Gambar</button>
                    <button type="button" onclick="del(<?php echo e($struktur->id); ?>)" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus Gambar</button>
                </form>

            <?php else: ?>
                
                <div class="text-center">
                    <p>Belum ada gambar struktur organisasi yang diunggah.</p>
                </div>
                 
                <form action="<?php echo e(route('struktur.admin.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="image">Unggah Gambar Struktur Organisasi</label>
                        <input type="file" name="image" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                         <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <small class="form-text text-muted">Tipe file: JPG, PNG, GIF. Maks: 2MB.</small>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Unggah Gambar</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        function del(id) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Gambar yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    var url = "<?php echo e(route('struktur.admin.destroy', ':id')); ?>";
                    url = url.replace(':id', id);
                    window.location.href = url;
                }
            });
        }
        
        <?php if(session('sukses')): ?>
            Swal.fire('Berhasil!', '<?php echo e(session('sukses')); ?>', 'success');
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/struktur_organisasi/index.blade.php ENDPATH**/ ?>