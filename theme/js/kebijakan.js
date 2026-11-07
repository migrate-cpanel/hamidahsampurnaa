// =================================================================
// KODE UNTUK FILE: public/theme/js/kebijakan.js
// =================================================================

// Langkah 1: Impor "mesin" PDF.js dari lokasinya di folder public.
// Path '/pdfjs/...' berarti "mulai dari folder root public".
import * as pdfjsLib from '/pdfjs/build/pdf.mjs';

// Menentukan lokasi file "pekerja" yang juga dibutuhkan oleh library PDF.js.
pdfjsLib.GlobalWorkerOptions.workerSrc = '/pdfjs/build/pdf.worker.mjs';

// --- PENGATURAN ---
const HALAMAN_MAKSIMAL_TERLIHAT = 10; // Halaman akan blur setelah halaman ke-10

// Langkah 2: Temukan elemen HTML yang akan menjadi wadah PDF.
const viewer = document.getElementById('pdf-viewer');

// Langkah 3: Pastikan wadah PDF ditemukan sebelum melanjutkan.
if (viewer) {
    // Ambil URL file PDF yang sudah kita "lempar" dari file Blade.
    const pdfUrl = viewer.dataset.pdfUrl;

    // Panggil fungsi utama untuk memulai proses render PDF.
    renderPDF(pdfUrl);

} else {
    // Jika elemen dengan id="pdf-viewer" tidak ditemukan, tampilkan error di console.
    console.error('Error Kritis: Elemen dengan ID "pdf-viewer" tidak ditemukan di halaman HTML Anda. Periksa file .blade.php!');
}


/**
 * Fungsi utama untuk memuat dan merender setiap halaman PDF.
 * @param {string} url - Alamat lengkap menuju file PDF.
 */
async function renderPDF(url) {
    // Pastikan URL tidak kosong.
    if (!url) {
        console.error('URL PDF tidak ditemukan di atribut data-pdf-url!');
        viewer.innerHTML = `<p style="color: red; text-align: center;">Gagal: Path PDF tidak valid.</p>`;
        return;
    }

    try {
        // Mulai proses memuat dokumen PDF dari URL.
        const loadingTask = pdfjsLib.getDocument(url);
        const pdf = await loadingTask.promise;
        console.log('PDF berhasil dimuat. Total halaman:', pdf.numPages);

        // Lakukan perulangan untuk setiap halaman di dalam PDF.
        for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
            const page = await pdf.getPage(pageNum);
            const viewport = page.getViewport({ scale: 1.5 }); // Skala bisa disesuaikan

            // Buat elemen <canvas> untuk "melukis" halaman PDF.
            const canvas = document.createElement('canvas');
            const context = canvas.getContext('2d');
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            // Beri kelas CSS agar bisa ditata (misal: diberi bayangan).
            canvas.classList.add('page');

            // LOGIKA UTAMA: Jika nomor halaman melebihi batas, tambahkan kelas 'blurred'.
            if (pageNum > HALAMAN_MAKSIMAL_TERLIHAT) {
                canvas.classList.add('blurred');
            }

            // "Lukis" halaman ke atas canvas.
            const renderContext = {
                canvasContext: context,
                viewport: viewport
            };
            await page.render(renderContext).promise;

            // Masukkan canvas yang sudah jadi ke dalam wadah di HTML.
            viewer.appendChild(canvas);
        }

    } catch (error) {
        // Tangani jika ada error saat memuat atau merender PDF.
        console.error('Gagal memuat atau merender PDF:', error);
        viewer.innerHTML = `<p style="color: red; text-align: center;">Terjadi error saat menampilkan PDF. Cek Console (F12) untuk detail.</p>`;
    }
}

// ... kode JavaScript Anda sebelumnya ...

// Lakukan perulangan untuk setiap halaman di dalam PDF.
for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {

    // MEMBUAT WADAH UNTUK SETIAP HALAMAN (JUDUL + KANVAS)
    const pageWrapper = document.createElement('div');
    pageWrapper.classList.add('pdf-page-wrapper');
    
    // MEMBUAT JUDUL HALAMAN DENGAN CLASS KHUSUS
    const titleElement = document.createElement('p');
    titleElement.classList.add('pdf-page-title');
    titleElement.textContent = `Halaman ${pageNum}`;

    // Tambahkan judul ke dalam wadah
    pageWrapper.appendChild(titleElement);
    
    // Kode untuk membuat kanvas (tidak ada yang berubah di sini)
    const page = await pdf.getPage(pageNum);
    const viewport = page.getViewport({ scale: 1.5 });
    const canvas = document.createElement('canvas');
    const context = canvas.getContext('2d');
    canvas.height = viewport.height;
    canvas.width = viewport.width;
    canvas.classList.add('page');

    if (pageNum > HALAMAN_MAKSIMAL_TERLIHAT) {
        canvas.classList.add('blurred');
    }

    const renderContext = {
        canvasContext: context,
        viewport: viewport
    };
    await page.render(renderContext).promise;

    // Tambahkan kanvas ke dalam wadah
    pageWrapper.appendChild(canvas);

    // Masukkan WADAH LENGKAP ke dalam viewer utama
    viewer.appendChild(pageWrapper);
}

// ... sisa kode JavaScript Anda ...