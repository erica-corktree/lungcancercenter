@if ($pagi->hasPages())
  <nav class="flex items-center" role="navigation" aria-label="pagination">
    @if (!$pagi->onFirstPage())
      <a
        href="{{ $pagi->previousPageUrl() }}"
        rel="prev"
        class="border rounded-sm mr-3 py-1 px-4 text-blue-dark hover:bg-blue hover:text-white"
      >&larr; {{ __('Previous', 'sage') }}</a>
    @endif

    <ul class="flex">
      @foreach ($pagi->elements() as $element)
        @if (is_string($element))
          <li class="disabled" aria-disabled="true">
            <span class="mr-3 py-1">&hellip;</span>
          </li>
        @endif

        @if (is_array($element))
          @foreach ($element as $page => $url)
            <li>
              @if ($page == $pagi->currentPage())
                <span
                  class="border border-blue rounded-sm mr-3 py-1 px-4 bg-blue text-white"
                  aria-current="page"
                >{{ $page }}</span>
              @else
                <a
                  href="{{ $url }}"
                  class="border rounded-sm mr-3 py-1 px-4 text-blue-dark hover:bg-blue hover:border-blue hover:text-white"
                >{{ $page }}</a>
              @endif
            </li>
          @endforeach
        @endif
      @endforeach
    </ul>

    @if ($pagi->hasMorePages())
      <a
        href="{{ $pagi->nextPageUrl() }}"
        rel="next"
        class="border rounded-sm mr-3 py-1 px-4 text-blue-dark hover:bg-blue hover:text-white"
      >{{ __('Next', 'sage') }} &rarr;</a>
    @endif
  </nav>
@endif
