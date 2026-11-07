const readMoreButtons = document.querySelectorAll('.btn-read-more');

        readMoreButtons.forEach(button => {
            button.addEventListener('click', () => {
                const card = button.closest('.feature-card');
                
                card.classList.toggle('is-expanded');

                if (card.classList.contains('is-expanded')) {
                    button.textContent = 'Tutup';
                } else {
                    button.textContent = 'Baca Selengkapnya';
                }
            });
        });



    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.count');

        counters.forEach(counter => {
            // Fungsi untuk menjalankan animasi
            const animate = () => {
                const target = +counter.getAttribute('data-target');
                let currentCount = +counter.innerText;
                
                let duration;
                // Cek jumlah target untuk menentukan kecepatan
                if (target > 100) {
                    duration = 3000; // Durasi cepat: 3 detik
                } else {
                    duration = 2000; // Durasi normal: 2 detik
                }

                // Kalkulasi penambahan per langkah
                const increment = target / (duration / 50);

                // --- BAGIAN PENTING YANG HILANG DARI KODE ANDA ---
                if (currentCount < target) {
                    // 1. Perbarui angka di layar
                    counter.innerText = Math.ceil(currentCount + increment);
                    // 2. Ulangi fungsi ini untuk menciptakan animasi
                    setTimeout(animate, 50);
                } else {
                    // Pastikan angka terakhir adalah angka target
                    counter.innerText = target;
                }
                // --- AKHIR BAGIAN PENTING ---
            };

            // Mulai animasi
            animate();
        });
    });



    /* ======================================= */
/* === JAVASCRIPT UNTUK POP-UP MODAL === */
/* (VERSI PERBAIKAN)           */
/* ======================================= */

document.addEventListener('DOMContentLoaded', function() {
    // Ambil elemen-elemen yang dibutuhkan
    const modalBackdrop = document.getElementById('aspiration-modal');
    const triggerButtons = document.querySelectorAll('.card-button');
    const closeButton = document.getElementById('modal-close-button');
    const cancelButton = document.getElementById('modal-cancel-button');
    const proceedButton = document.getElementById('modal-proceed-button');

    // Pastikan modal dalam keadaan tersembunyi saat halaman pertama kali dimuat
    modalBackdrop.classList.remove('active');
    modalBackdrop.style.display = 'none';

    // Fungsi untuk membuka modal
    function openModal(event) {
        event.preventDefault(); // Mencegah link default berfungsi
        const destination = this.dataset.href;
        if (destination) {
            proceedButton.href = destination;
        }
        modalBackdrop.style.display = 'flex';
        setTimeout(() => {
            modalBackdrop.classList.add('active');
        }, 10);
    }

    // Fungsi untuk menutup modal
    function closeModal() {
        modalBackdrop.classList.remove('active');
        setTimeout(() => {
            modalBackdrop.style.display = 'none';
        }, 300);
    }

    /* ================================================= */
    /* === PENAMBAHAN: Perbaikan untuk Tombol "Back" === */
    /* ================================================= */
    // Event ini akan berjalan setiap kali halaman ditampilkan,
    // termasuk saat kembali menggunakan tombol "Back" browser.
    window.addEventListener('pageshow', function(event) {
        // 'persisted' bernilai true jika halaman diambil dari cache (bfcache)
        // Kita paksa tutup modal untuk mereset tampilan halaman.
        if (event.persisted) {
            closeModal();
        }
    });
    /* ============================================= */

    // Tambahkan event listener ke setiap tombol pemicu
    triggerButtons.forEach(button => {
        button.addEventListener('click', openModal);
    });

    // Tambahkan event listener untuk tombol tutup
    closeButton.addEventListener('click', closeModal);
    cancelButton.addEventListener('click', closeModal);

    // Tambahkan event listener untuk menutup modal saat klik di luar area konten
    modalBackdrop.addEventListener('click', function(event) {
        if (event.target === modalBackdrop) {
            closeModal();
        }
    });
});
