<div class="container flex flex-wrap bg-white">
  <section class="order-last w-full md:w-3/4 {{ !App\is_tree('about-us') ? 'md:border-l' : '' }}">
    <div class="editorcontent py-6 md:py-12 md:pt-16 {{ !App\is_tree('about-us') ? 'md:pl-16' : '' }}">
      @content
    </div>

    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

    @unless(App\is_tree('about-us'))
      <div class="page-footer py-6 md:py-12 md:pl-16">
        @include('partials.related-content')
        @include('partials.attribution')

        <div class="relative z-10 mt-8 flex items-center justify-between">
          @if ($prev)
            <a class="button button--grey-light flex py-3 px-5 items-center font-normal leading-none text-left" href="{{ get_the_permalink($prev->ID) }}">
              @svg('images.arrow-left', 'block w-5 h-auto')
              <span class="block pl-2">
                <span class="block text-sm opacity-75">{{ __('Previous Page', 'sage') }}</span>
                <span class="block font-heading font-medium">{{ $prev->post_title }}</span>
              </span>
            </a>
          @endif

          @if ($next)
            <a class="button button--grey-light flex py-3 px-5 items-center font-normal leading-none text-right" href="{{ get_the_permalink($next->ID) }}">
              <span class="block pr-2">
                <span class="block text-sm opacity-75">{{ __('Next Page', 'sage') }}</span>
                <span class="block font-heading font-medium">{{ $next->post_title }}</span>
              </span>
              @svg('images.arrow-right', 'block w-5 h-auto')
            </a>
          @endif
        </div>
      </div>
    @endunless
  </section>

  @unless(App\is_tree('about-us'))
    @include('partials.sidebar-page')
  @endunless
</div>

@unless(App\is_tree('about-us'))
  @include('partials.cta-footer')
@endunless
