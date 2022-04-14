@if ($related)
  <div class="relative z-10">
    <h2 class="mb-8 text-2xl font-medium leading-none text-teal">{{ __('Related Pages') }}</h2>

    <div class="flex flex-wrap md:-mx-8">
      @foreach ($related as $item)
        @set($photo, json_decode(json_encode(get_field('page_hero_photo', $item->ID), false)))

        <div class="w-full mb-8 md:w-1/3 md:mb-0 md:px-8 last:mb-0">
          @if ($photo)
            <x-photo class="block w-64 h-32 mb-4 border md:h-40 md:w-auto" :photo="$photo" />
          @endif

          <h4 class="mb-4 text-xl font-medium">
            <a class="text-blue-dark" href="{{ esc_url(get_permalink($item->ID)) }}">{!! get_the_title($item->ID) !!}</a>
          </h4>

          <p>
            <a class="button button--blue-dark" href="{{ esc_url(get_permalink($item->ID)) }}">{{ __('Read More', 'sage') }}</a>
          </p>
        </div>
      @endforeach
    </div>
  </div>
@endif
