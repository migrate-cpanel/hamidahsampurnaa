@if ($paginator->hasPages())
    <div class="pagination-controls">
        {{-- Tombol Previous --}}
        <a href="{{ $paginator->previousPageUrl() }}" 
           class="arrow-btn {{ ($paginator->onFirstPage()) ? 'disabled' : '' }}">
           ‹
        </a>

        {{-- Info Halaman "1 of 30" --}}
        <span class="page-info">
            {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}
        </span>

        {{-- Tombol Next --}}
        <a href="{{ $paginator->nextPageUrl() }}"
           class="arrow-btn {{ (!$paginator->hasMorePages()) ? 'disabled' : '' }}">
           ›
        </a>
    </div>
@endif