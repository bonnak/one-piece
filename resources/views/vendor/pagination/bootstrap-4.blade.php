@if ($paginator->hasPages())
    <ul class="flex list-reset border border-grey-light rounded w-auto">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="block text-grey-dark border-r border-grey-light px-3 py-2">&laquo;</span></li>
        @else
            <li class="page-item"><a class="block hover:text-white hover:bg-pink text-pink border-r border-grey-light px-3 py-2 no-underline" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><span class="block text-grey-dark border-r border-grey-light px-3 py-2">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="block text-grey-dark border-r border-grey-light px-3 py-2">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="block hover:text-white hover:bg-pink text-pink border-r border-grey-light px-3 py-2 no-underline" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="block hover:text-white hover:bg-pink text-pink border-r border-grey-light px-3 py-2 no-underline" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li class="page-item disabled"><span class="block text-grey-dark border-r border-grey-light px-3 py-2">&raquo;</span></li>
        @endif
    </ul>
@endif
