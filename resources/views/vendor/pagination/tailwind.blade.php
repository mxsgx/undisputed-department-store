@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 md:hidden">
            @if ($paginator->onFirstPage())
                <span class="border-2 border-gray-500 text-gray-500 outline-none px-4 py-2 font-medium">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="border-2 border-black outline-none px-4 py-2 font-medium">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="border-2 border-black outline-none px-4 py-2 font-medium">
                    {!! __('pagination.next') !!}
                </a>
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
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="border-2 border-black outline-none px-4 py-2 font-medium">
                        &laquo;
                    </a>
                @endif

                @foreach ($elements as $element)
                    @if (is_string($element))
                        <span aria-disabled="true">
                            <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5 dark:bg-gray-800 dark:border-gray-600">{{ $element }}</span>
                        </span>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page" class="border-2 border-black outline-none px-4 py-2 font-medium text-white bg-black">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $url }}" class="border-2 border-black outline-none px-4 py-2 font-medium" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="prev" class="border-2 border-black outline-none px-4 py-2 font-medium">
                        &raquo;
                    </a>
                @else
                    <span class="border-2 border-gray-500 text-gray-500 outline-none px-4 py-2 font-medium">
                        &raquo;
                    </span>
                @endif
            </div>
        </div>
    </nav>
@endif
