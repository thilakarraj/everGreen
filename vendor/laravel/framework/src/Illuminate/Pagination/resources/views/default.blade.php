@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link soluship_txt" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <!-- <li class="disabled"><span>&laquo;</span></li> -->
        @else
            <li class="page-item">
                <a href="{{ $paginator->previousPageUrl() }}" class="page-link soluship_txt" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <!-- <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li> -->
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item"><a class="page-link soluship_txt">{{ $element }}</a></li>
                <!-- <li class="disabled"><span>{{ $element }}</span></li> -->
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><a class="page-link soluship_bg" >{{ $page }}</a></li>
                        <!-- <li class="active"><span>{{ $page }}</span></li> -->
                    @else
                        <li class="page-item"><a href="{{ $url }}" class="page-link soluship_txt">{{ $page }}</a></li>
                        <!-- <li><a href="{{ $url }}">{{ $page }}</a></li> -->
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a  href="{{ $paginator->nextPageUrl() }}" class="page-link soluship_txt" href="#" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
            <!-- <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li> -->
        @else
            <li class="page-item disabled">
                <a class="page-link soluship_txt" href="#" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
            <!-- <li class="disabled"><span>&raquo;</span></li> -->
        @endif
    </ul>
@endif