@if ($section->photo)
  <section class="section section--{{ $section->acf_fc_layout }} section--{{ $section->acf_fc_layout }}-with-photo relative bg-blue text-white">
    <div class="container relative z-10 flex flex-wrap justify-end">
      <div class="w-full py-16 md:pl-12 md:w-1/2">
        <h2 class="mb-8 text-4xl font-medium">{{ $section->heading }}</h2>
        <p><a class="button button--green" href="{{ $section->link->url }}">{{ $section->link->title }}</a></p>
      </div>
    </div>

    <picture class="absolute inset-y-0 left-0 w-full opacity-50 cta__picture md:w-1/2 md:opacity-100" style="clip-path: url('#wave-cta');">
      @foreach (get_intermediate_image_sizes() as $size)
        @if (isset($section->photo->sizes->{$size}))
          <source
            srcset="{{ $section->photo->sizes->{$size} }}"
            media="(max-width: {{ $section->photo->sizes->{"{$size}-width"} }}px)"
          >
        @endif
      @endforeach

      <img class="object-cover w-full h-full cta__img" src="{{ $section->photo->url }}" alt="{{ $section->photo->alt }}">
    </picture>

    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="none" height="0" width="0">
      <clipPath id="wave-cta" clipPathUnits="objectBoundingBox">
        <path d="M0.684,0 c0,0,0.405,0.306,0.297,1 H0 V0 H0.684" />
      </clipPath>
    </svg>
  </section>
@else
  <section class="relative bg-blue-dark text-white section section--{{ $section->acf_fc_layout }}">
    <div class="container flex flex-wrap items-center py-12">
      <h2 class="w-full mb-8 text-4xl font-medium md:mb-0 md:pr-8 md:w-2/3">{{ $section->heading }}</h2>
      <p class="w-full md:w-1/3"><a class="button button--green" href="{{ $section->link->url }}">{{ $section->link->title }}</a></p>
    </div>
  </section>
@endif
