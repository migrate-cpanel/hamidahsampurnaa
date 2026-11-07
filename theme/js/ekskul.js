// public/theme/js/ekskul.js



document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.main-image-slider', {
        // Opsi
        loop: true, // Agar slider berputar terus
        autoplay: {
            delay: 3000, // Pindah setiap 3 detik
            disableOnInteraction: false, // Lanjutkan autoplay setelah di-swipe manual
        },
        effect: 'fade', // Efek transisi fade
        fadeEffect: {
            crossFade: true
        },
    });
    // --- LOGIKA UNTUK TOMBOL BUKA/TUTUP GALERI ---
    document.querySelectorAll('.gallery-toggle-button').forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('.category-card');
            const hiddenGallery = card.querySelector('.hidden-gallery');

            // Jika galeri sedang tersembunyi, kita buka
            if (hiddenGallery.style.display === 'none' || hiddenGallery.style.display === '') {
                hiddenGallery.style.display = 'grid'; // 'grid' sesuai dengan style di CSS Anda
                this.textContent = 'Sembunyikan Gambar';
            } else { // Jika galeri sedang terbuka, kita sembunyikan
                hiddenGallery.style.display = 'none';
                this.textContent = 'Lihat Semua Gambar';
            }
        });
    });

    // --- LOGIKA UNTUK MODAL POP-UP GAMBAR (DARI galerisekolah.js) ---
    const modal = document.getElementById('imageModal');
    // Jika modal tidak ada di halaman, hentikan script agar tidak error
    if (!modal) return; 

    const modalImage = document.getElementById('modalImage');
    const modalTitle = modal.querySelector('.modal-title');
    const closeButton = modal.querySelector('.close-button');
    const prevButton = modal.querySelector('.prev-button');
    const nextButton = modal.querySelector('.next-button');
    const imageCounter = modal.querySelector('.image-counter');

    let currentImages = [];
    let currentIndex = 0;

    function openModal(categoryName, images, startIndex = 0) {
        modalTitle.textContent = categoryName;
        currentImages = images;
        currentIndex = startIndex;

        if (currentImages.length > 0) {
            updateModalImage();
            const showNav = currentImages.length > 1;
            prevButton.style.display = showNav ? 'block' : 'none';
            nextButton.style.display = showNav ? 'block' : 'none';
        }

        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function updateModalImage() {
        if (currentImages.length > 0) {
            modalImage.src = currentImages[currentIndex].src;
            modalImage.alt = currentImages[currentIndex].alt;
            imageCounter.textContent = `${currentIndex + 1}/${currentImages.length}`;
        }
    }

    // Event listener ini akan menangani klik pada gambar cover dan thumbnail
    document.querySelectorAll('.gallery-item').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();

            const card = this.closest('.category-card');
            const cardTitle = card.querySelector('h2 a').textContent;

            let allImagesInCard = [];
            card.querySelectorAll('.gallery-item').forEach(imgLink => {
                const imageData = {
                    src: imgLink.dataset.src,
                    alt: imgLink.dataset.alt
                };
                // Mencegah duplikasi gambar saat dikumpulkan
                if (!allImagesInCard.some(img => img.src === imageData.src)) {
                    allImagesInCard.push(imageData);
                }
            });

            const startIndex = allImagesInCard.findIndex(img => img.src === this.dataset.src);
            
            openModal(cardTitle, allImagesInCard, startIndex);
        });
    });

    // Navigasi modal
    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % currentImages.length;
        updateModalImage();
    });

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + currentImages.length) % currentImages.length;
        updateModalImage();
    });

    // Menutup modal
    function closeModal() {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    closeButton.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => { if (e.target === modal) closeModal(); });
    document.addEventListener('keydown', (e) => { if (e.key === "Escape") closeModal(); });
});

