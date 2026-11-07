

<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('/theme')); ?>/css/kebijakan.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">


<main>
        <section class="hero-section">
            <div class="hero-content">
                <h1>Kebijakan Pendidikan Karakter</h1>
                <p>"Demi terciptanya keamanan dan keselarasan bersama, mari kita junjung tinggi aturan yang berlaku."</p>
            </div>
        </section>

        <section class="content-section">
            <div class="section-title">
                <h2>Kebijakan Sekolah</h2>
                <p>Berikut adalah Kebijakan Sekolah yang berlaku di Sekolah Hamidah Sampurna</p>
            </div>
            
            <div class="document-viewer">
                <div class="viewer-header">
                    <span>Kebijakan Orang Tua / Wali Siswa Sekolah Hamidah Sampurna</span>
                </div>
                <div class="viewer-body policy-list">
                    <ol>
                        <li><b>Menjunjung tinggi visi dan misi Sekolah Islam Terpadu Hamidah Sampurna, serta mendukung penerapan nilai-nilai Islami dalam kehidupan sehari-hari anak.
                            </b> </li>
                        <li><b>Menjalin sinergi aktif antara rumah dan sekolah, termasuk berkomunikasi secara terbuka, menghadiri kegiatan sekolah, dan mengikuti arahan wali kelas atau manajemen.</b></li>
                        <li><b>Mendampingi proses belajar anak di rumah dengan memberi motivasi, bimbingan, dan penguatan atas nilai-nilai disiplin serta akhlak mulia.</b> </li>
                        <li><b>Menjaga nama baik sekolah dalam setiap tindakan, baik secara langsung maupun melalui media sosial, serta tidak menyebarkan informasi yang belum terverifikasi.</b></li>
                        <li><b>Mengikuti aturan berpakaian yang santun dan sesuai dengan adab Islam ketika berada di lingkungan sekolah.</b></li>
                        <li><b>Membayar kewajiban keuangan sekolah sesuai jadwal yang ditentukan dan melalui sistem pembayaran resmi.</b></li>
                        <li><b>Mendukung kegiatan ekstrakurikuler dan pengembangan diri siswa</b></li>
                        <li><b>Menjadi teladan bagi anak-anak dalam berperilaku, berpakaian, dan bertutur kata, baik di rumah maupun di sekolah.</b></li>
                        <li><b>Berkomitmen mencegah dan tidak mentoleransi segala bentuk perundungan (bullying) baik secara fisik, verbal, sosial, maupun digital, serta siap bekerja sama dengan sekolah dalam memberikan pemahaman dan pembinaan kepada anak agar bersikap empati, santun, dan menghormati sesama.</b></li>
                        <li><b>Mendukung penuh segala tata tertib, kebijakan, dan peraturan yang ditetapkan oleh sekolah sebagai bentuk tanggung jawab dan penghormatan terhadap sistem pendidikan yang berlaku.</b></li>
                    </ol>
                </div>
            </div>
        </section>

         

        

        <div class="document-container">
            <h2 class="document-title">Buku Saku SHS</h2>

            
            <div id="pdf-viewer" data-pdf-url="<?php echo e(asset('pdf/Tata Tertib Students Guide Book - SHS.pdf')); ?>"></div>
        </div>

        
        <script src="<?php echo e(asset('theme/js/kebijakan.js')); ?>" type="module"></script>

        

        
    </main>

        
    <script src="pdfjs/build/pdf.mjs" type="module"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamidahsampurnas/public_html/resources/views/kebijakan-pendidikan-karakter.blade.php ENDPATH**/ ?>