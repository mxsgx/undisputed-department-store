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


@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 md:hidden">
            @if ($paginator->onFirstPage())
                <span class="border-2 border-gray-500 text-gray-500 outline-none px-4 py-2 font-medium">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <button type="button" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before" class="border-2 border-black outline-none px-4 py-2 font-medium">
                    {!! __('pagination.previous') !!}
                </button>
            @endif

            @if ($paginator->hasMorePages())
                <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before" class="border-2 border-black outline-none px-4 py-2 font-medium">
                    {!! __('pagination.next') !!}
                </button>
            @else
                <span class="border-2 border-gray-500 text-gray-500 outline-none px-4 py-2 font-medium">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="hidden md:flex-1 md:flex md:flex-col lg:flex-row md:items-center md:justify-between gap-2">
            <div>
                <p class="font-medium">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div class="flex gap-1">
                @if($paginator->onFirstPage())
                    <span class="border-2 border-gray-500 text-gray-500 outline-none px-4 py-2 font-medium">
                        &laquo;
                    </span>
                @else
                    <button type="button" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after" class="border-2 border-black outline-none px-4 py-2 font-medium">
                        &laquo;
                    </button>
                @endif

                @foreach ($elements as $element)
                    @if (is_string($element))
                        <span class="border-2 border-black outline-none px-4 py-2 font-medium text-white bg-black">{{ $element }}</span>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span wire:key="paginator-{{ $paginator->getPageName() }}-page{{ $page }}" aria-current="page" class="border-2 border-black outline-none px-4 py-2 font-medium text-white bg-black">
                                    {{ $page }}
                                </span>
                            @else
                                <button type="button" type="button" wire:key="paginator-{{ $paginator->getPageName() }}-page{{ $page }}" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" class="border-2 border-black outline-none px-4 py-2 font-medium" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                    {{ $page }}
                                </button>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if($paginator->hasMorePages())
                    <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after" class="border-2 border-black outline-none px-4 py-2 font-medium">
                        &raquo;
                    </button>
                @else
                    <span class="border-2 border-gray-500 text-gray-500 outline-none px-4 py-2 font-medium">
                        &raquo;
                    </span>
                @endif
            </div>
        </div>
    </nav>
@endif
