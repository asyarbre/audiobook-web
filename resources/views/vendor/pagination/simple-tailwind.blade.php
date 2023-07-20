@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="absolute flex justify-between transform -translate-y-1/2 left-2 right-2 lg:left-5 lg:right-5 top-1/2">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="btn btn-circle btn-sm lg:btn-md btn-accent">
                <x-fas-chevron-left class="w-3 h-3 lg:w-5 lg:h-5"/>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="btn btn-circle btn-sm lg:btn-md btn-accent">
                <x-fas-chevron-left class="w-3 h-3 lg:w-5 lg:h-5"/>
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="btn btn-circle btn-sm lg:btn-md btn-accent">
                <x-fas-chevron-right class="w-3 h-3 lg:w-5 lg:h-5"/>
            </a>
        @else
            <span class="btn btn-circle btn-sm lg:btn-md btn-accent">
                <x-fas-chevron-right class="w-3 h-3 lg:w-5 lg:h-5"/>
            </span>
        @endif
    </nav>
@endif
