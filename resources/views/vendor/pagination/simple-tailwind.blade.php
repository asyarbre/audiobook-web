@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="absolute flex justify-between bottom-5 left-3 right-3 lg:left-5 lg:right-5 lg:bottom-1/3">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="btn btn-circle btn-accent">
                <x-fas-chevron-left class="w-6 h-6"/>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="btn btn-circle btn-accent">
                <x-fas-chevron-left class="w-6 h-6"/>
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="btn btn-circle btn-accent">
                <x-fas-chevron-right class="w-6 h-6"/>
            </a>
        @else
            <span class="btn btn-circle btn-accent">
                <x-fas-chevron-right class="w-6 h-6"/>
            </span>
        @endif
    </nav>
@endif
