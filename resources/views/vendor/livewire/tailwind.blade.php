@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp

<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between font-sans">
            <!-- Mobile View -->
            <div class="flex justify-between flex-1 sm:hidden">
                <span>
                    @if ($paginator->onFirstPage())
                        <span class="relative inline-flex items-center px-3.5 py-1.5 text-xs font-semibold text-brownie/35 bg-[#FAF9F5]/40 border border-[#F3E9DC] cursor-default rounded-sm">
                            {!! __('pagination.previous') !!}
                        </span>
                    @else
                        <button 
                            type="button" 
                            wire:click="previousPage('{{ $paginator->getPageName() }}')" 
                            x-on:click="{{ $scrollIntoViewJsSnippet }}" 
                            wire:loading.attr="disabled" 
                            dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before" 
                            class="relative inline-flex items-center px-3.5 py-1.5 text-xs font-semibold text-brownie bg-white border border-[#F3E9DC] rounded-sm hover:bg-[#FAF9F5] hover:border-[#C08552]/40 hover:text-[#C08552] transition-colors shadow-2xs">
                            {!! __('pagination.previous') !!}
                        </button>
                    @endif
                </span>

                <span>
                    @if ($paginator->hasMorePages())
                        <button 
                            type="button" 
                            wire:click="nextPage('{{ $paginator->getPageName() }}')" 
                            x-on:click="{{ $scrollIntoViewJsSnippet }}" 
                            wire:loading.attr="disabled" 
                            dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before" 
                            class="relative inline-flex items-center px-3.5 py-1.5 ml-2 text-xs font-semibold text-brownie bg-white border border-[#F3E9DC] rounded-sm hover:bg-[#FAF9F5] hover:border-[#C08552]/40 hover:text-[#C08552] transition-colors shadow-2xs">
                            {!! __('pagination.next') !!}
                        </button>
                    @else
                        <span class="relative inline-flex items-center px-3.5 py-1.5 ml-2 text-xs font-semibold text-brownie/35 bg-[#FAF9F5]/40 border border-[#F3E9DC] cursor-default rounded-sm">
                            {!! __('pagination.next') !!}
                        </span>
                    @endif
                </span>
            </div>

            <!-- Desktop View -->
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-xs text-brownie/70 font-medium leading-5">
                        <span>{!! __('Showing') !!}</span>
                        <span class="font-bold text-brownie">{{ $paginator->firstItem() }}</span>
                        <span>{!! __('to') !!}</span>
                        <span class="font-bold text-brownie">{{ $paginator->lastItem() }}</span>
                        <span>{!! __('of') !!}</span>
                        <span class="font-bold text-brownie">{{ $paginator->total() }}</span>
                        <span>{!! __('results') !!}</span>
                    </p>
                </div>

                <div>
                    <span class="relative z-0 inline-flex items-center gap-1">
                        {{-- Previous Page Link --}}
                        @if ($paginator->onFirstPage())
                            <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                                <span class="relative inline-flex items-center px-2 py-1.5 text-xs text-brownie/30 bg-[#FAF9F5]/40 border border-[#F3E9DC] cursor-default rounded-sm" aria-hidden="true">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </span>
                        @else
                            <button 
                                type="button" 
                                wire:click="previousPage('{{ $paginator->getPageName() }}')" 
                                x-on:click="{{ $scrollIntoViewJsSnippet }}" 
                                dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after" 
                                class="relative inline-flex items-center px-2 py-1.5 text-xs font-semibold text-brownie bg-white border border-[#F3E9DC] rounded-sm hover:bg-[#FAF9F5] hover:border-[#C08552]/40 hover:text-[#C08552] transition-colors shadow-2xs" 
                                aria-label="{{ __('pagination.previous') }}">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <span aria-disabled="true">
                                    <span class="relative inline-flex items-center px-3 py-1.5 text-xs font-semibold text-brownie/40 bg-white border border-[#F3E9DC] cursor-default rounded-sm">{{ $element }}</span>
                                </span>
                            @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    <span wire:key="paginator-{{ $paginator->getPageName() }}-page{{ $page }}">
                                        @if ($page == $paginator->currentPage())
                                            <span aria-current="page">
                                                <span class="relative inline-flex items-center px-3 py-1.5 text-xs font-bold text-white bg-[#C08552] border border-[#C08552] cursor-default rounded-sm shadow-2xs">{{ $page }}</span>
                                            </span>
                                        @else
                                            <button 
                                                type="button" 
                                                wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" 
                                                x-on:click="{{ $scrollIntoViewJsSnippet }}" 
                                                class="relative inline-flex items-center px-3 py-1.5 text-xs font-semibold text-brownie bg-white border border-[#F3E9DC] rounded-sm hover:bg-[#FAF9F5] hover:border-[#C08552]/40 hover:text-[#C08552] transition-colors shadow-2xs" 
                                                aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                                {{ $page }}
                                            </button>
                                        @endif
                                    </span>
                                @endforeach
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($paginator->hasMorePages())
                            <button 
                                type="button" 
                                wire:click="nextPage('{{ $paginator->getPageName() }}')" 
                                x-on:click="{{ $scrollIntoViewJsSnippet }}" 
                                dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after" 
                                class="relative inline-flex items-center px-2 py-1.5 text-xs font-semibold text-brownie bg-white border border-[#F3E9DC] rounded-sm hover:bg-[#FAF9F5] hover:border-[#C08552]/40 hover:text-[#C08552] transition-colors shadow-2xs" 
                                aria-label="{{ __('pagination.next') }}">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        @else
                            <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                                <span class="relative inline-flex items-center px-2 py-1.5 text-xs text-brownie/30 bg-[#FAF9F5]/40 border border-[#F3E9DC] cursor-default rounded-sm" aria-hidden="true">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </span>
                        @endif
                    </span>
                </div>
            </div>
        </nav>
    @endif
</div>
