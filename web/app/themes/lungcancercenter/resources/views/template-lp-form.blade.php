{{--
  Template Name: Landing Page - Form
--}}

@extends('layouts.app')

@section('content')
  @while (have_posts()) @php(the_post())
    <div class="page-header page-header--template-lp-form">
      <div class="container relative flex flex-wrap z-30 py-8 md:py-12">
        <div class="w-full md:w-1/2 md:pr-8 flex flex-col justify-between">
          <div class="page-header__content">
            @include('partials.breadcrumbs')

            <h1 class="mb-4 font-medium leading-tight text-3xl md:text-5xl">{!! $title !!}</h1>

            @if (isset($hero->introduction))
              <p class="text-lg">{{ $hero->introduction }}</p>
            @endif
          </div>

          
        </div>

        <div class="flex items-center w-full md:w-1/2">
          <div class="p-8 pr-24 overflow-hidden bg-grey-lighter border shadow-lg text-black">
            @shortcode("[hf_form slug=\"{$slug}\"]")
          </div>
        </div>
      </div>

      @if (isset($hero->photo))
        <x-photo class="photo--page-header" :photo="$hero->photo" />
      @endif

      <svg class="absolute h-0 w-0">
        <clipPath id="wave" clipPathUnits="objectBoundingBox">
          <path d="M1,0 H0 v0.582 c0,0,0.035,0.094,0.13,0.08 c0.07,-0.01,0.146,-0.132,0.244,-0.139 C0.583,0.509,0.761,1,1,0.941 V0" />
        </clipPath>
        <clipPath id="wave-2" clipPathUnits="objectBoundingBox">
          <path d="M1,0 H0 v0.57 c0,0,0.043,0.113,0.137,0.099 C0.222,0.66,0.291,0.546,0.388,0.54 C0.605,0.525,0.745,1,1,0.951 V0" />
        </clipPath>
      </svg>
    </div>

    @include('partials.sections')
    @include('partials.cta-footer')
  @endwhile
@endsection
