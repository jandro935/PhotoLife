@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a href="#" class="disabled btn btn-sm btn-creative btn-creative--prev text-uppercase"><span class="arrow arrow-left"></span>Previous</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-sm btn-creative btn-creative--prev text-uppercase"><span class="arrow arrow-left"></span>Previous</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            {{--@if (is_string($element))--}}
                {{--<li class="disabled"><span>{{ $element }}</span></li>--}}
            {{--@endif--}}

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="u-PaddingRight50 u-PaddingLeft50 u-Weight800">{{ $page }}/{{ $paginator->lastPage() }}</span>
                        {{--<li class="active"><span>{{ $page }}</span></li>--}}
                    {{--@else--}}
                        {{--<li><a href="{{ $url }}">{{ $page }}</a></li>--}}
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-sm btn-creative btn-creative--next text-uppercase">Next<span class="arrow arrow-right"></span></a>
        @else
            <a href="#" class="disabled btn btn-sm btn-creative btn-creative--next text-uppercase">Next<span class="arrow arrow-right"></span></a>
        @endif
    </ul>
@endif
