@if ($paginator->hasPages())
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-between" style="width: 100%;">
        {{-- Tombol Sebelumnya --}}
        @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <span class="page-link" style="display: flex; align-items: center;">
                <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Previous
            </span>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                style="display: flex; align-items: center;">
                <i class="bi bi-arrow-left" style="margin-right: 5px;"></i> Previous
            </a>
        </li>
        @endif

        {{-- Link Halaman --}}
        <div class="d-flex align-items-center">
            @foreach ($elements as $element)
            {{-- Tiga Titik (Elipsis) --}}
            @if (is_string($element))
            <li class="page-item disabled">
                <span class="page-link">{{ $element }}</span>
            </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
            @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
            <li class="page-item active" aria-current="page">
                <span class="page-link" style="background-color: #e9ecef; border-color: transparent;">{{ $page }}</span>
            </li>
            @else
            <li class="page-item">
                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
            </li>
            @endif
            @endforeach
            @endif
            @endforeach
        </div>

        {{-- Tombol Berikutnya --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                style="display: flex; align-items: center;">
                Next <i class="bi bi-arrow-right" style="margin-left: 5px;"></i>
            </a>
        </li>
        @else
        <li class="page-item disabled">
            <span class="page-link" style="display: flex; align-items: center;">
                Next <i class="bi bi-arrow-right" style="margin-left: 5px;"></i>
            </span>
        </li>
        @endif
    </ul>
</nav>
@endif
