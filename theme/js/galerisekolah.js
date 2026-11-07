document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = modal.querySelector('.modal-title');
    const closeButton = modal.querySelector('.close-button');
    const prevButton = modal.querySelector('.prev-button');
    const nextButton = modal.querySelector('.next-button');
    const imageCounter = modal.querySelector('.image-counter');

    let currentImages = []; // Array of images for the current category
    let currentIndex = 0;   // Current index in the currentImages array

    // --- Function to open the modal ---
    function openModal(categoryName, images, startIndex = 0) {
        modalTitle.textContent = categoryName;
        currentImages = images;
        currentIndex = startIndex;

        if (currentImages.length === 0) {
            // Handle case where category has no images
            modalImage.src = ''; // Clear image
            modalImage.alt = 'No images available for this category.';
            imageCounter.textContent = '0/0';
            prevButton.style.display = 'none';
            nextButton.style.display = 'none';
        } else {
            updateModalImage();
            prevButton.style.display = currentImages.length > 1 ? 'block' : 'none';
            nextButton.style.display = currentImages.length > 1 ? 'block' : 'none';
        }

        modal.style.display = 'flex'; // Use flex to center the modal content
        document.body.style.overflow = 'hidden'; // Prevent scrolling background
    }

    // --- Function to update the image in the modal ---
    function updateModalImage() {
        if (currentImages.length > 0) {
            modalImage.src = currentImages[currentIndex].src;
            modalImage.alt = currentImages[currentIndex].alt;
            imageCounter.textContent = `${currentIndex + 1}/${currentImages.length}`;
        }
    }

    // --- Event Listeners for Gallery Items (Images) ---
    document.querySelectorAll('.gallery-item').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default link behavior

            const categoryCard = this.closest('.category-card');
            const categoryName = categoryCard.querySelector('.category-link').textContent;
            const categoryImages = Array.from(categoryCard.querySelectorAll('.gallery-item')).map(imgLink => ({
                src: imgLink.dataset.src, // Use data-src for full-size image
                alt: imgLink.dataset.alt
            }));

            // Find the index of the clicked image
            const clickedSrc = this.dataset.src;
            const startIndex = categoryImages.findIndex(img => img.src === clickedSrc);

            openModal(categoryName, categoryImages, startIndex);
        });
    });

    // --- Event Listeners for Category Links (Titles) ---
    document.querySelectorAll('.category-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default link behavior

            const categoryCard = this.closest('.category-card');
            const categoryName = this.textContent;
            const categoryImages = Array.from(categoryCard.querySelectorAll('.gallery-item')).map(imgLink => ({
                src: imgLink.dataset.src,
                alt: imgLink.dataset.alt
            }));

            // Open modal with the first image of the category
            openModal(categoryName, categoryImages, 0);
        });
    });


    // --- Slider Navigation ---
    prevButton.addEventListener('click', function() {
        currentIndex = (currentIndex === 0) ? currentImages.length - 1 : currentIndex - 1;
        updateModalImage();
    });

    nextButton.addEventListener('click', function() {
        currentIndex = (currentIndex === currentImages.length - 1) ? 0 : currentIndex + 1;
        updateModalImage();
    });

    // --- Close Modal ---
    closeButton.addEventListener('click', function() {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto'; // Re-enable scrolling
    });

    // Close modal if clicked outside of modal content
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });

    // Close modal with ESC key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = modal.querySelector('.modal-title');
    const closeButton = modal.querySelector('.close-button');
    const prevButton = modal.querySelector('.prev-button');
    const nextButton = modal.querySelector('.next-button');
    const imageCounter = modal.querySelector('.image-counter');

    let currentImages = [];
    let currentIndex = 0;
    const IMAGE_LIMIT = 1; // <--- PERUBAHAN DI SINI: Batas jumlah gambar yang ditampilkan di awal

    // --- Function to open the modal ---
    function openModal(categoryName, images, startIndex = 0) {
        modalTitle.textContent = categoryName;
        currentImages = images;
        currentIndex = startIndex;

        if (currentImages.length === 0) {
            modalImage.src = '';
            modalImage.alt = 'No images available for this category.';
            imageCounter.textContent = '0/0';
            prevButton.style.display = 'none';
            nextButton.style.display = 'none';
        } else {
            updateModalImage();
            prevButton.style.display = currentImages.length > 1 ? 'block' : 'none';
            nextButton.style.display = currentImages.length > 1 ? 'block' : 'none';
        }

        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    // --- Function to update the image in the modal ---
    function updateModalImage() {
        if (currentImages.length > 0) {
            modalImage.src = currentImages[currentIndex].src;
            modalImage.alt = currentImages[currentIndex].alt;
            imageCounter.textContent = `${currentIndex + 1}/${currentImages.length}`;
        }
    }

    // --- Initialize Gallery View (Hide extra images and show/hide button) ---
    document.querySelectorAll('.category-card').forEach(card => {
        const galleryImagesContainer = card.querySelector('.gallery-images');
        const galleryItems = galleryImagesContainer.querySelectorAll('.gallery-item');
        const showMoreButton = card.querySelector('.show-more-images-button');

        if (galleryItems.length > IMAGE_LIMIT) { // Hanya tampilkan tombol jika lebih dari 1 gambar
            galleryImagesContainer.classList.add('limited-view');
            showMoreButton.style.display = 'block';
            showMoreButton.textContent = 'Lihat Semua Gambar';
            showMoreButton.dataset.status = 'hidden';
        } else {
            showMoreButton.style.display = 'none'; // Sembunyikan jika hanya 1 gambar atau tidak ada
            galleryImagesContainer.classList.remove('limited-view'); // Pastikan tidak ada kelas limited-view
        }
    });

    // --- Event Listeners for Gallery Items (Images) ---
    document.querySelectorAll('.gallery-item').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();

            const categoryCard = this.closest('.category-card');
            const categoryName = categoryCard.querySelector('.category-link').textContent;
            const categoryImages = Array.from(categoryCard.querySelectorAll('.gallery-item')).map(imgLink => ({
                src: imgLink.dataset.src,
                alt: imgLink.dataset.alt
            }));

            const clickedSrc = this.dataset.src;
            const startIndex = categoryImages.findIndex(img => img.src === clickedSrc);

            openModal(categoryName, categoryImages, startIndex);
        });
    });

    // --- Event Listeners for Category Links (Titles) ---
    document.querySelectorAll('.category-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const categoryCard = this.closest('.category-card');
            const categoryName = this.textContent;
            const categoryImages = Array.from(categoryCard.querySelectorAll('.gallery-item')).map(imgLink => ({
                src: imgLink.dataset.src,
                alt: imgLink.dataset.alt
            }));

            openModal(categoryName, categoryImages, 0);
        });
    });

    // --- Event Listener for "Show More/Less Images" Button ---
    document.querySelectorAll('.show-more-images-button').forEach(button => {
        button.addEventListener('click', function() {
            const galleryImagesContainer = this.closest('.category-card').querySelector('.gallery-images');

            if (this.dataset.status === 'hidden') {
                galleryImagesContainer.classList.remove('limited-view');
                this.textContent = 'Sembunyikan Gambar';
                this.dataset.status = 'shown';
            } else {
                galleryImagesContainer.classList.add('limited-view');
                this.textContent = 'Lihat Semua Gambar';
                this.dataset.status = 'hidden';
            }
        });
    });

    // --- Slider Navigation ---
    prevButton.addEventListener('click', function() {
        currentIndex = (currentIndex === 0) ? currentImages.length - 1 : currentIndex - 1;
        updateModalImage();
    });

    nextButton.addEventListener('click', function() {
        currentIndex = (currentIndex === currentImages.length - 1) ? 0 : currentIndex + 1;
        updateModalImage();
    });

    // --- Close Modal ---
    closeButton.addEventListener('click', function() {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    });

    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });

    document.querySelectorAll('.category-card').forEach(card => {
        
        // --- LOGIKA DESKRIPSI (Tidak berubah) ---
        const description = card.querySelector('.kegiatan-description');
        const toggleBtn = card.querySelector('.toggle-btn');
        if (description && toggleBtn) {
            if (description.offsetHeight < description.scrollHeight) {
                toggleBtn.style.display = 'block';
            } else {
                toggleBtn.style.display = 'none';
            }
            toggleBtn.addEventListener('click', function() {
                description.classList.toggle('truncated');
                this.textContent = description.classList.contains('truncated') ? 'Selengkapnya' : 'Sembunyikan';
            });
        }

        // --- LOGIKA BARU: LIHAT/SEMBUNYIKAN & PAGINASI ---
        const showMoreBtn = card.querySelector('.show-more-images-button');
        const galleryPreview = card.querySelector('.gallery-preview');
        const paginationContainer = card.querySelector('.image-pagination-container');

        // Jika tombol "Lihat Semua" ada
        if (showMoreBtn && paginationContainer) {
            showMoreBtn.addEventListener('click', function() {
                const isHidden = this.dataset.status === 'hidden';

                galleryPreview.style.display = isHidden ? 'none' : 'block';
                paginationContainer.classList.toggle('gallery-hidden', !isHidden);
                
                this.textContent = isHidden ? 'Sembunyikan Gambar' : 'Lihat Semua Gambar';
                this.dataset.status = isHidden ? 'shown' : 'hidden';
            });
        }

        // --- LOGIKA PAGINASI GAMBAR (Hanya dijalankan jika ada container-nya) ---
        if (!paginationContainer) return;
        
        const allImages = Array.from(paginationContainer.querySelectorAll('.gallery-images .gallery-item'));
        if (allImages.length <= 6) return; // Jangan jalankan paginasi jika gambar tidak cukup

        const prevButton = paginationContainer.querySelector('.prev-page');
        const nextButton = paginationContainer.querySelector('.next-page');
        const pageCounter = paginationContainer.querySelector('.page-counter');

        const ITEMS_PER_PAGE = 6;
        const totalPages = Math.ceil(allImages.length / ITEMS_PER_PAGE);
        let currentPage = 1;

        function updateButtonsState() {
            if (!prevButton || !nextButton) return;
            prevButton.disabled = currentPage === 1;
            nextButton.disabled = currentPage === totalPages;
        }

        function showPage(page) {
            const startIndex = (page - 1) * ITEMS_PER_PAGE;
            const endIndex = startIndex + ITEMS_PER_PAGE;

            allImages.forEach((image, index) => {
                image.style.display = (index >= startIndex && index < endIndex) ? 'flex' : 'none';
            });

            if (pageCounter) {
                pageCounter.textContent = `${page} / ${totalPages}`;
            }
            updateButtonsState();
        }
        
        if (nextButton) {
            nextButton.addEventListener('click', () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });
        }

        if (prevButton) {
            prevButton.addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });
        }
        
        showPage(1); // Inisialisasi halaman pertama
    });
});
