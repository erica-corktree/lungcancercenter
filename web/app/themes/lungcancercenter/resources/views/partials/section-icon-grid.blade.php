<section class="section section--{{ $section->acf_fc_layout }} py-12">
  <div class="container">
    <div class="editorcontent max-w-4xl mx-auto mb-12 text-center">
      @if ($section->heading)
        <h2 @isnull($section->subheading, 'class="mb-12"')>{{ $section->heading }}</h2>
      @endif

      @if ($section->subheading)
        <p>{{ $section->subheading }}</p>
      @endif
    </div>

    <div class="-mx-4 flex flex-wrap justify-center">
      @foreach ($section->items as $item)
        <div class="mb-8 mb:mb-0 px-4 w-full sm:w-1/3 md:w-1/5 text-center">
          @if (!empty($item->icon))
            <picture class="block w-32 h-auto mx-auto">
              @foreach (get_intermediate_image_sizes() as $size)
                @if (isset($item->icon->sizes->{$size}))
                  <source
                    srcset="{{ $item->icon->sizes->{$size} }}"
                    media="(max-width: {{ $item->icon->sizes->{"{$size}-width"} }}px)"
                  >
                @endif
              @endforeach

              <img src="{{ $item->icon->url }}" alt="{{ $item->icon->alt }}" width="128px" height="128px">
            </picture>
          @endif

          @if ($item->heading)
            <h3 class="text-xl font-medium text-blue">{{ $item->heading }}</h3>
          @endif

          @if ($item->description)
            <p class="mt-6">{{ $item->description }}</p>
          @endif

          @if ($item->link)
            <p class="mt-6"><a class="button button--blue-dark" href="{{ $item->link->url }}">{{ $item->link->title }}</a></p>
          @endif
        </div>
      @endforeach
    </div>
  </div>
</section>
