<article class="relative flex px-6 py-6 flex-col text-black bg-grey-lighter overflow-hidden shadow-lg border">
  @if (isset($hero->photo))
    <x-photo class="z-0 border mb-4" :photo="$hero->photo" />
  @endif

  <header class="mb-4">
    <h2 class="mb-2 text-2xl font-medium leading-snug text-blue">@title</h2>
    <p class="text-grey-dark">{{ __('By', 'sage') }} @author <span>&#124;</span> <time datetime="@published('c')">@published('F j, Y')</time></p>
  </header>

  <div class="flex flex-auto flex-col">
    <div class="flex-auto entry-summary stretched-link">
      @if (isset($hero->introduction))
        {{ $hero->introduction }}
      @else
        @excerpt
      @endif
    </div>

    <p class="mt-6">
      <a class="button button--blue-dark stretched-link" href="@permalink">{{ __('Read More', 'sage') }}</a>
    </p>
  </div>
</article>
