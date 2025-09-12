@if ($paginator->hasPages())
    <nav class="inline-flex items-center gap-2">

        {{-- Tombol Previous --}}
        @if ($paginator->onFirstPage())
            <span
                class="flex items-center w-10 h-10 justify-center text-sm font-medium text-gray-400 bg-gray-100 border border-gray-200 rounded-full cursor-not-allowed">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"
                class="flex items-center w-10 h-10 justify-center text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full hover:bg-[#ca7305] hover:text-white transition-all duration-300 group">
                <svg class="w-4 h-4 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
        @endif

        {{-- Nomor Halaman --}}
        <div class="flex items-center gap-1">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span
                        class="w-10 h-10 flex items-center justify-center text-sm font-medium text-gray-500">...</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span
                                class="w-10 h-10 flex items-center justify-center text-sm font-medium bg-[#ca7305] text-white rounded-full">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}"
                                class="w-10 h-10 flex items-center justify-center text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full hover:bg-[#ca7305] hover:text-white transition-all duration-300">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Tombol Next --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"
                class="flex items-center w-10 h-10 justify-center text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full hover:bg-[#ca7305] hover:text-white transition-all duration-300 group">
                <svg class="w-4 h-4 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        @else
            <span
                class="flex items-center w-10 h-10 justify-center text-sm font-medium text-gray-400 bg-gray-100 border border-gray-200 rounded-full cursor-not-allowed">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </span>
        @endif

    </nav>
@endif
