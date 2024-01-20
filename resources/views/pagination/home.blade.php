<div class="nav-list-page">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link fs-17 text-dark rounded me-2 h-100 d-flex align-items-center" href="#" disabled aria-label="Previous">
                    <i class="fa-solid fa-chevron-left"></i>
                </a>
            </li>
            @else
            <li class="page-item">
                <a href="{{ $paginator->previousPageUrl() }}" class="page-link fs-17 text-dark rounded me-2 h-100 d-flex align-items-center" aria-label="Previous">
                    <i class="fa-solid fa-chevron-left"></i>
                </a>
            </li>
            @endif
            @foreach ($elements as $element)
            @if (is_string($element))
            <li class="disabled">{{ $element }}</li>
            @endif

            @if (is_array($element))
            @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
            <li class="page-item"><a class="page-link fs-17 active-all rounded me-2" href="#">{{$page}}</a></li>
            @else
            <li class="page-item"><a class="page-link fs-17 rounded me-2" href="{{ $url }}">{{$page}}</a></li>
            @endif
            @endforeach
            @endif
            @endforeach
            @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link fs-17 text-dark rounded me-2 h-100 d-flex align-items-center" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </li>
            @else
            <li class="page-item disabled">
                <a class="page-link fs-17 text-dark rounded me-2 h-100 d-flex align-items-center" disabled href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </li>
            @endif
        </ul>
    </nav>
</div>