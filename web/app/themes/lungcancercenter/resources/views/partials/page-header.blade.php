<div class="page-header">
  <div class="container relative z-30 py-8 md:py-12">
    @include('partials.breadcrumbs')

    <h1 class="mb-4 text-3xl font-medium leading-tight md:text-5xl">{!! $title !!}</h1>

    @if (is_singular('post'))
      @include('partials/entry-meta')
    @endif

    @if (isset($hero->introduction))
      <p class="text-lg">{{ $hero->introduction }}</p>
    @endif
  </div>

  @if (isset($hero->photo))
    <x-photo class="photo--page-header" :photo="$hero->photo" />
  @endif

  <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="none" height="0" width="0">
    <clipPath id="wave" clipPathUnits="objectBoundingBox">
      <path d="M1,0 H0 v0.724 c0,0,0.056,0.125,0.151,0.108 c0.07,-0.012,0.231,-0.143,0.328,-0.15 c0.209,-0.016,0.383,0.446,0.521,0.285 V0" />
    </clipPath>
    <clipPath id="wave-2" clipPathUnits="objectBoundingBox">
      <path d="M0.106,0.832 c0.07,-0.013,0.231,-0.143,0.328,-0.151 c0.209,-0.016,0.327,0.445,0.566,0.285 V0 H0 v0.79 C0.026,0.817,0.061,0.84,0.106,0.832" />
    </clipPath>
  </svg>
</div>
