

<?php $__env->startSection('title', 'Sliders'); ?>

<?php $__env->startSection('breadcrums'); ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Data</h1>
        </div>
        <div class="col-sm-6">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md">
            <form action="<?php echo e(route('sliders.store')); ?>" method="post" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <div class="ml-auto">
                                    <a href="<?php echo e(route('sliders.index')); ?>" class="btn btn-default">
                                        <i class="fas fa fa-reply"></i> Kembali </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h6><b>Lampiran Image(.jpg, .png)</b></h6>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image1" id="image1"
                                            accept=".jpg,.png" required>
                                        <label class="custom-file-label" for="exampleInputFile">Browse...</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>

            </form>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <script>
        $('.custom-file input').change(function() {
            var $el = $(this),
                files = $el[0].files,
                label = files[0].name;
            if (files.length > 1) {
                label = label + " and " + String(files.length - 1) + " more files"
            }
            $el.next('.custom-file-label').html(label);
        });
    </script>

    <script>
    // Menunggu seluruh halaman siap dimuat
    $(function() {
        // Ketika input file dengan id 'image1' berubah (ada file dipilih)
        $('#image1').on('change', function() {
            // Cek jika ada file yang dipilih
            if (this.files && this.files[0]) {
                const file = this.files[0];
                const maxSize = 2 * 1024 * 1024; // 2MB dalam bytes

                // Jika ukuran file melebihi batas maksimal
                if (file.size > maxSize) {
                    // Tampilkan notifikasi error menggunakan SweetAlert
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Ukuran file terlalu besar! Maksimal 2 MB.',
                    });

                    // Kosongkan kembali input file dan labelnya
                    $(this).val('');
                    $(this).next('.custom-file-label').html('Browse...');
                }
            }
        });
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/sliders/add.blade.php ENDPATH**/ ?>