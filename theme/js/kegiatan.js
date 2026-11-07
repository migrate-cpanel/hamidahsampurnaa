document.addEventListener('DOMContentLoaded', function() {
    // --- SETUP UNTUK MODAL POP-UP GAMBAR ---
    const modal = document.getElementById('imageModal');
    if (modal) {
        const modalImage = document.getElementById('modalImage');
        const modalTitle = modal.querySelector('.modal-title');
        const closeButton = modal.querySelector('.close-button');
        const prevModalButton = modal.querySelector('.prev-button');
        const nextModalButton = modal.querySelector('.next-button');
        const imageCounter = modal.querySelector('.image-counter');

        let currentModalImages = [];
        let currentModalIndex = 0;

        function updateModalImage() {
            if (currentModalImages.length > 0) {
                modalImage.src = currentModalImages[currentModalIndex].src;
                modalImage.alt = currentModalImages[currentModalIndex].alt;
                imageCounter.textContent = `${currentModalIndex + 1}/${currentModalImages.length}`;
            }
        }

        function openModal(categoryName, images, startIndex = 0) {
            modalTitle.textContent = categoryName;
            currentModalImages = images;
            currentModalIndex = startIndex;

            if (currentModalImages.length > 0) {
                updateModalImage();
                prevModalButton.style.display = currentModalImages.length > 1 ? 'block' : 'none';
                nextModalButton.style.display = currentModalImages.length > 1 ? 'block' : 'none';
            } else {
                prevModalButton.style.display = 'none';
                nextModalButton.style.display = 'none';
            }
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        closeButton.addEventListener('click', closeModal);
        prevModalButton.addEventListener('click', () => {
            currentModalIndex = (currentModalIndex === 0) ? currentModalImages.length - 1 : currentModalIndex - 1;
            updateModalImage();
        });
        nextModalButton.addEventListener('click', () => {
            currentModalIndex = (currentModalIndex < currentModalImages.length - 1) ? currentModalIndex + 1 : 0;
            updateModalImage();
        });
        window.addEventListener('click', (event) => { if (event.target === modal) closeModal(); });
        document.addEventListener('keydown', (event) => { if (event.key === 'Escape') closeModal(); });
    }

    // --- LOGIKA UNTUK SETIAP CARD KEGIATAN ---
    document.querySelectorAll('.category-card').forEach(card => {
        
        // --- Fungsi pembantu untuk membuka modal ---
        function triggerModal(clickedElement) {
            // =========================================================================
            // ## PERBAIKAN UTAMA DI SINI ##
            // Hanya ambil gambar dari dalam '.image-pagination-container' untuk menghindari duplikasi
            // =========================================================================
            const allImagesNodeList = card.querySelectorAll('.image-pagination-container .gallery-item');
            
            // Jika container tidak ditemukan (misal, hanya 1 gambar), cari di preview
            const sourceImages = allImagesNodeList.length > 0 ? allImagesNodeList : card.querySelectorAll('.gallery-preview .gallery-item');

            const allImagesData = Array.from(sourceImages).map(imgLink => ({
                src: imgLink.dataset.src,
                alt: imgLink.dataset.alt
            }));
            
            if (allImagesData.length === 0) return;

            const categoryName = card.querySelector('.category-link').textContent;
            const startIndex = clickedElement ? allImagesData.findIndex(img => img.src === clickedElement.dataset.src) : 0;
            
            openModal(categoryName, allImagesData, Math.max(0, startIndex)); // Math.max untuk handle jika not found
        }

        // --- Event listener untuk klik pada judul/link kategori ---
        const categoryLink = card.querySelector('.category-link');
        if (categoryLink) {
            categoryLink.addEventListener('click', function(e) {
                e.preventDefault();
                triggerModal(null); // Buka modal dari gambar pertama
            });
        }
        
        // --- Event listener untuk klik pada gambar (baik di preview maupun di galeri) ---
        const galleryItems = card.querySelectorAll('.gallery-item');
        galleryItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                triggerModal(this); // Buka modal dari gambar yang diklik
            });
        });

        // --- Logika deskripsi "Selengkapnya" ---
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

        // --- Logika tombol "Lihat Semua Gambar" ---
        const showMoreBtn = card.querySelector('.show-more-images-button');
        const galleryPreview = card.querySelector('.gallery-preview');
        const paginationContainer = card.querySelector('.image-pagination-container');
        if (showMoreBtn && paginationContainer) {
            showMoreBtn.addEventListener('click', function() {
                const isHidden = this.dataset.status === 'hidden';
                galleryPreview.style.display = isHidden ? 'none' : 'block';
                paginationContainer.classList.toggle('gallery-hidden', !isHidden);
                this.textContent = isHidden ? 'Sembunyikan Gambar' : 'Lihat Semua Gambar';
                this.dataset.status = isHidden ? 'shown' : 'hidden';
            });
        }

        // --- Logika paginasi internal card ---
        if (!paginationContainer) return;
        
        const allPaginatedImages = Array.from(paginationContainer.querySelectorAll('.gallery-images .gallery-item'));
        if (allPaginatedImages.length <= 6) return;

        const prevPageButton = paginationContainer.querySelector('.prev-page');
        const nextPageButton = paginationContainer.querySelector('.next-page');
        const pageCounter = paginationContainer.querySelector('.page-counter');
        const ITEMS_PER_PAGE = 6;
        const totalPages = Math.ceil(allPaginatedImages.length / ITEMS_PER_PAGE);
        let currentPage = 1;

        function showPage(page) {
            const startIndex = (page - 1) * ITEMS_PER_PAGE;
            const endIndex = startIndex + ITEMS_PER_PAGE;
            allPaginatedImages.forEach((image, index) => {
                image.style.display = (index >= startIndex && index < endIndex) ? 'flex' : 'none';
            });
            if (pageCounter) pageCounter.textContent = `${page} / ${totalPages}`;
            if (prevPageButton) prevPageButton.disabled = page === 1;
            if (nextPageButton) nextPageButton.disabled = page === totalPages;
        }
        
        if (nextPageButton) nextPageButton.addEventListener('click', () => { if (currentPage < totalPages) { currentPage++; showPage(currentPage); } });
        if (prevPageButton) prevPageButton.addEventListener('click', () => { if (currentPage > 1) { currentPage--; showPage(currentPage); } });
        
        showPage(1);
    });
});