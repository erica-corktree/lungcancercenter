<section class="section section--{{ $section->acf_fc_layout }} py-12 bg-blue-dark text-white">
  <div class="editorcontent max-w-4xl mx-auto mb-12 text-center">
    @if ($section->heading)
      <h2 class="text-white">{{ $section->heading }}</h2>
    @endif

    @if ($section->subheading)
      <p>{{ $section->subheading }}</p>
    @endif
  </div>

  @if ($section->cards)
    <div class="container">
      <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach ($section->cards as $card)
              <li class="glide__slide">
                <div class="p-6 bg-grey-lighter text-black overflow-hidden shadow-lg border">
                  <h3 class="mb-4 text-2xl font-medium text-blue-dark">{{ $card->heading }}</h3>
                  <p class="mb-12 text-grey-darker">{{ $card->content }}</p>

                  @if ($card->links)
                    @foreach ($card->links as $link)
                      <p class="mb-4 last:mb-0"><a class="button button--blue block" href="{{ $link->link->url }}">{{ $link->link->title }}</a></p>
                    @endforeach
                  @endif
                </div>
              </li>
            @endforeach
          </ul>
        </div>

        <div class="glide__arrows flex md:block mt-8 md:mt-0 items-center justify-between" data-glide-el="controls">
          <button
            class="glide__arrow glide__arrow--left md:absolute top-1/2 left-0 md:-ml-16 w-12 h-12 bg-grey-lighter text-blue-dark rounded-full -translate-y-1/2"
            data-glide-dir="<"
            aria-label="{{ __('Prev', 'sage') }}"
          >
            @svg('images.chevron-left', 'inline-block w-8 h-auto')
          </button>
          <button
            class="glide__arrow glide__arrow--right md:absolute top-1/2 right-0 md:-mr-16 w-12 h-12 bg-grey-lighter text-blue-dark rounded-full -translate-y-1/2"
            data-glide-dir=">"
            aria-label="{{ __('Next', 'sage') }}"
          >
            @svg('images.chevron-right', 'inline-block w-8 h-auto')
          </button>
        </div>
      </div>
    </div>
  @endif
</section>
