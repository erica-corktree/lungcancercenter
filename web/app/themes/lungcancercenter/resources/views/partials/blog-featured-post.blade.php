@if ($id)
  @set($author, get_post_field('post_author', $id))

  <div class="hero hero--blog-featured-post">
    <div class="container">
      <div class="hero__inner">
        <h1 class="hero__title">@title($id)</h1>

        <div class="hero__introduction">
          <p class="mb-4">{{ __('By', 'sage') }} {{ get_the_author_meta('display_name', $author) }} <span>&#124;</span> <time datetime="@published('c')">@published('F j, Y')</time></p>
          <p class="mb-8 text-lg">{!! get_post_meta($id, '_yoast_wpseo_metadesc', true) ?? get_the_excerpt($id) !!}</p>
          <p><a class="button button--green" href="{{ get_the_permalink($id) }}">{{ __('Read More', 'sage') }}</a></p>
        </div>
      </div>
    </div>

    @if (get_field('post_hero_photo', $id))
      @set($photo, @json_decode(json_encode(get_field('post_hero_photo', $id))))
      <x-photo class="photo--hero" :photo="$photo" />
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="none" height="0" width="0">
        <clipPath id="wave-hero" clipPathUnits="objectBoundingBox">
          <path d="M1,0 H0 c0,0,0.126,0.628,0.339,0.729 c0.121,0.076,0.202,-0.021,0.33,0.026 c0.134,0.055,0.193,0.196,0.331,0.245 V0" />
        </clipPath>
      </svg>
    @endif
  </div>
@endif
