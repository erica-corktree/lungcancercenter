<div class="relative py-8 md:py-12 text-white bg-blue-dark">
  <div class="relative z-10 container">
    @include('partials.breadcrumbs')

    <div class="flex pt-4 flex-wrap">
      @if ($profile->photo)
        <picture class="h-32 mb-4 md:mb-0 w-32 rounded-full">
          <img
            class="block h-full w-full border border-grey-dark rounded-full object-cover"
            src="{{ $profile->photo->sizes->thumbnail ?? '' }}"
            alt="{{ __('Photo of', 'sage') }} {{ $profile->name ?? '' }}"
          >
        </picture>
      @endif

      <div class="@if ($profile->photo) md:pl-6 @endif md:flex-1">
        <hgroup>
          <h1 class="mb-2 font-medium text-3xl md:text-5xl leading-none">{{ $profile->name }}</h1>
          <h2 class="mb-6 font-medium text-lg md:text-xl md:leading-none text-blue-lightest">{{ $profile->title }}</h2>
        </hgroup>

        {!! $profile->bio !!}
      </div>
    </div>
  </div>
</div>
