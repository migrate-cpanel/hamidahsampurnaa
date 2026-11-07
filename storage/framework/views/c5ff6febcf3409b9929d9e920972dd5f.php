<!DOCTYPE html>
<html>
<head>
    <title>Pesan Baru dari Kontak Website</title>
</head>
<body>
    <h2>Anda Menerima Pesan Baru!</h2>
    <hr>
    <p><strong>Nama:</strong> <?php echo e($data['name']); ?></p>
    <p><strong>Email:</strong> <?php echo e($data['email']); ?></p>
    <br>
    <div>
        <strong>Pesan:</strong>
        <p><?php echo e($data['message']); ?></p>
    </div>
</body>
</html><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/emails/contact-form.blade.php ENDPATH**/ ?>