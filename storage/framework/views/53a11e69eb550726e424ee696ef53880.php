



<?php $__env->startSection('title', 'Detail Aspirasi'); ?>

<?php $__env->startSection('breadcrums'); ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Detail Aspirasi</h1>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Detail dari <strong><?php echo e($aspirasi->nama_lengkap); ?></strong></h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <dl>
                    <dt>Nama Pengirim</dt>
                    <dd><?php echo e($aspirasi->nama_lengkap); ?></dd>

                    <dt>Peran</dt>
                    <dd><?php echo e($aspirasi->peran); ?></dd>

                    <?php if($aspirasi->peran == 'Orang Tua'): ?>
                    <dt>Nama Siswa</dt>
                    <dd><?php echo e($aspirasi->nama_siswa ?? '-'); ?></dd>
                    <?php endif; ?>

                    <dt>Jenjang</dt>
                    <dd><?php echo e($aspirasi->jenjang); ?></dd>

                    <dt>Tanggal Masuk</dt>
                    <dd><?php echo e($aspirasi->created_at->format('d F Y, H:i')); ?></dd>
                </dl>
            </div>
            <div class="col-md-6">
                <dl>
                    <dt>Jalur Penyampaian</dt>
                    <dd><?php echo e($aspirasi->jalur_aspirasi); ?></dd>

                    <dt>Kategori Aspirasi</dt>
                    <dd><?php echo e($aspirasi->kategori_aspirasi == 'Lainnya' ? 'Lainnya: ' . $aspirasi->kategori_lainnya : $aspirasi->kategori_aspirasi); ?></dd>

                    <dt>Bersedia Bertemu Langsung?</dt>
                    <dd><?php echo e($aspirasi->pertemuan); ?></dd>

                    <?php if($aspirasi->pertemuan == 'Ya'): ?>
                    <dt>Kontak (HP/WA)</dt>
                    <dd><?php echo e($aspirasi->kontak ?? 'Tidak diisi'); ?></dd>
                    <?php endif; ?>
                </dl>
            </div>
        </div>

        <hr>

        <h4>Isi Aspirasi:</h4>
        <div class="p-3" style="background-color: #f8f9fa; border-radius: 5px; border: 1px solid #dee2e6;">
            <p style="white-space: pre-wrap;"><?php echo e($aspirasi->aspirasi_detail); ?></p>
        </div>
    </div>
    <div class="card-footer">
        <a href="<?php echo e(route('aspirasi.admin.index')); ?>" class="btn btn-secondary">Kembali ke Daftar</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/aspirasi/show.blade.php ENDPATH**/ ?>