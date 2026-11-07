

<?php $__env->startSection('title', 'Tambah Data Sains'); ?>

<?php $__env->startSection('breadcrums'); ?>
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Data Sains</h1>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <form action="<?php echo e(route('sains.admin.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo e(old('title')); ?>" required>
                </div>
                <div class="form-group">
                    <label for="short_description">Tempat & Tanggal Upload</label>
                    <textarea class="form-control" id="short_description" name="short_description" rows="3" required><?php echo e(old('short_description')); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="content-editor">Konten Lengkap</label>
                    <textarea class="form-control" id="content-editor" name="content" rows="10"><?php echo e(old('content')); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="published_date">Tanggal Publikasi</label>
                    <input type="date" class="form-control" id="published_date" name="published_date" value="<?php echo e(old('published_date')); ?>" required>
                </div>
                <hr>
                <h5>Credits (Opsional)</h5>
                <div class="row">
                    <div class="col-md-4"><div class="form-group">
                        <label for="author">Penulis</label>
                        <input type="text" class="form-control" id="author" name="author" value="<?php echo e(old('author')); ?>">
                    </div></div>
                    <div class="col-md-4"><div class="form-group">
                        <label for="editor">Editor</label>
                        <input type="text" class="form-control" id="editor" name="editor" value="<?php echo e(old('editor')); ?>">
                    </div></div>
                    <div class="col-md-4"><div class="form-group">
                        <label for="photographer">Fotografer</label>
                        <input type="text" class="form-control" id="photographer" name="photographer" value="<?php echo e(old('photographer')); ?>">
                    </div></div>
                </div>
                


                <div class="row mt-4">
                    <div class="col-12">
                        <a href="<?php echo e(route('sains.admin.index')); ?>" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        tinymce.init({
            selector: 'textarea#content-editor',
            plugins: 'lists link image table code help wordcount',
            toolbar: 'undo redo | blocks | bold italic backcolor | ' +
                     'alignleft aligncenter alignright alignjustify | ' +
                     'bullist numlist outdent indent | removeformat | help',
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/sains/add.blade.php ENDPATH**/ ?>