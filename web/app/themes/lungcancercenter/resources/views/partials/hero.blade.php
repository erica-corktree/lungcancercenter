<div class="hero">
  <div class="container">
    <div class="hero__inner">
      <h1 class="hero__title">{!! $title !!}</h1>

      @if (isset($hero->introduction))
        <p class="hero__introduction">{{ $hero->introduction }}</p>
      @endif
    </div>
  </div>

  @if (isset($hero->photo))
    <x-photo class="photo--hero" :photo="$hero->photo" />
  @endif

  <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="none" height="0" width="0">
    <clipPath id="wave-hero" clipPathUnits="objectBoundingBox">
      <path d="M1,0 H0 c0,0,0.126,0.628,0.339,0.729 c0.121,0.076,0.202,-0.021,0.33,0.026 c0.134,0.055,0.193,0.196,0.331,0.245 V0" />
    </clipPath>
    <clipPath id="wave-hero-2" clipPathUnits="objectBoundingBox">
      <path d="M1,0 H0 v0.936 c0.226,0.116,0.356,-0.044,0.5,-0.053 c0.202,-0.015,0.269,0.194,0.5,0.087 V0" />
    </clipPath>
  </svg>
</div>
