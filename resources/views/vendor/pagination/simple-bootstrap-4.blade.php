@if ($paginator->hasPages())
    {{--  <ul class="pagination">
       
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">@lang('pagination.previous')</span></li>
        @else
            <li class="page-item"><a class="page-link previous" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
        @endif

        
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link nextPrevious" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
        @else
            <li class="page-item disabled"><span class="page-link">@lang('pagination.next')</span></li>
        @endif
    </ul>  --}}
    <div class="pagination">
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="previous page-link">
            <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
            <span class="pagination_word">PRECEDENTA</span>
        </a>
        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="next">
            <span class="pagination_word">URMATOAREA</span>
            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
        </a>
        <div class="clear"></div>
    </div>
@endif
