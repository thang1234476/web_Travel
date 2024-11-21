@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-between" style="width:100%;">

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between"
            style="display: grid; grid-template-columns: 1fr 1fr; justify-content: space-between; width: 100%;">
            <div>
                <p class="small text-muted">
                    {!! __('Showing') !!}
                    <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                    {!! __('of') !!}
                    <span class="fw-semibold">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <ul class="pagination" style="display: flex; justify-content: flex-start; align-items: center;float:right; margin-right:5px; list-style-type: none;">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link" aria-hidden="true" style="color: #333">&lsaquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                                aria-label="@lang('pagination.previous')" style="color: #333">&lsaquo;</a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active" aria-current="page" style="background: none;"><span class="page-link" style=" color: #333;background:#99FFFF">{{ $page }}</span></li>
                                @else
                                    <li class="page-item" ><a class="page-link" href="{{ $url }}" style="color: #333">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                                aria-label="@lang('pagination.next')" style="color: #333">&rsaquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link" aria-hidden="true" style="color: #333">&rsaquo;</span>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endif