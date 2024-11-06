@if($paginator->hasPages())
    <div class="paginationdiv mt60">
        <ul class="pagination shadow">
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <li><a href="{{ $paginator->previousPageUrl() }}" class="prev">&#60; Prev</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled"><a href="#">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pagenumber active"><a href="#">{{ $page }}</a></li>
                        @else
                            <li class="pagenumber"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" class="next">Next &#62;</a></li>
            @endif
        </ul>
    </div>
@endif
