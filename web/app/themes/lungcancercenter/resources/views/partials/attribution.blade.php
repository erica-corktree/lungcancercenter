<footer class="relative z-10">
  <div class="attribution">
    <p class="attribution__title flex items-center py-4 font-medium">
      <button
        class="attribution__toggle flex w-6 h-6 items-center justify-center bg-grey-light rounded-full shadow-md"
        aria-controls="attribution-author"
        aria-expanded="false"
        aria-label="{{ __('Toggle author info', 'sage') }}"
      >
        @svg('images.plus', 'w-4')
      </button>

      <span class="ml-2">{{ __('Author:', 'sage') }} {{ $author->name ?? '' }}</span>
    </p>

    <div class="attribution__content py-4 hidden flex" id="attribution-author" aria-hidden="true">
      @if (isset($author->photo))
        <picture class="h-24 mb-4 md:mb-0 w-24 rounded-full">
          <img
            class="block h-full w-full border border-grey-dark rounded-full object-cover"
            src="{{ $author->photo->sizes->thumbnail ?? '' }}"
            alt="{{ __('Photo of', 'sage') }} {{ $author->name ?? '' }}"
          >
        </picture>
      @endif

      <div class="md:pl-4 flex-1">
        <p class="mb-2 text-lg font-medium leading-none">
          <a class="text-teal hover:text-teal-dark underline" href="{{ $author->url ?? '' }}">{{ $author->name ?? '' }}</a>
        </p>

        <p class="mb-4 font-medium leading-none text-grey-dark">{{ $author->title ?? '' }}</p>
        <p>{{ $author->bio ?? '' }}</p>
      </div>
    </div>

    @if ($reviewer)
      <p class="attribution__title flex items-center py-4 font-medium">
        <button
          class="attribution__toggle flex w-6 h-6 items-center justify-center bg-grey-light rounded-full shadow-md"
          aria-controls="attribution-reviewer"
          aria-expanded="false"
          aria-label="{{ __('Toggle author info', 'sage') }}"
        >
          @svg('images.plus', 'w-4')
        </button>

        <span class="ml-2">{{ __('Medical Reviewer:', 'sage') }} {{ $reviewer->name }}</span>
      </p>

      <div class="attribution__content py-4 hidden flex" id="attribution-reviewer" aria-hidden="true">
        @if (isset($reviewer->photo))
          <picture class="h-24 mb-4 md:mb-0 w-24 rounded-full">
            <img
              class="block h-full w-full border border-grey-dark rounded-full object-cover"
              src="{{ $reviewer->photo->sizes->thumbnail }}"
              alt="{{ __('Photo of', 'sage') }} {{ $reviewer->name }}"
            >
          </picture>
        @endif

        <div class="md:pl-4 flex-1">
          <p class="mb-2 text-lg font-medium leading-none">
            <a class="text-teal hover:text-teal-dark underline" href="{{ $reviewer->url }}">{{ $reviewer->name }}</a>
          </p>

          <p class="mb-4 font-medium leading-none text-grey-dark">{{ $reviewer->title }}</p>
          {!! $reviewer->bio !!}
        </div>
      </div>
    @endif

    @if (get_field('post_citations',))
      <p class="attribution__title flex items-center py-4 font-medium">
        <button
          class="attribution__toggle flex w-6 h-6 items-center justify-center bg-grey-light rounded-full shadow-md"
          aria-controls="attribution-citations"
          aria-expanded="false"
          aria-label="{{ __('Toggle citations', 'sage') }}"
        >
          @svg('images.plus', 'w-4')
        </button>

        <span class="ml-2">Sources</span>
      </p>

      <div class="attribution__content hidden py-4" id="attribution-citations" aria-hidden="true">
        <div class="editorcontent">
          {!! get_field('post_citations',) !!}
        </div>
      </div>
    @endif
    @if (get_field('page_citations',))
      <p class="attribution__title flex items-center py-4 font-medium">
        <button
          class="attribution__toggle flex w-6 h-6 items-center justify-center bg-grey-light rounded-full shadow-md"
          aria-controls="attribution-citations"
          aria-expanded="false"
          aria-label="{{ __('Toggle citations', 'sage') }}"
        >
          @svg('images.plus', 'w-4')
        </button>

        <span class="ml-2">Sources</span>
      </p>

      <div class="attribution__content hidden py-4" id="attribution-citations" aria-hidden="true">
        <div class="editorcontent">
          {!! get_field('page_citations',) !!}
        </div>
      </div>
    @endif
  </div>
</footer>
