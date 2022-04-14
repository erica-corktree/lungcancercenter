@if ($content)
  <div class="relative p-8">
    @if ($content->photo)
      <x-photo class="photo--widget" :photo="$content->photo" />
    @endif

    <p class="mb-1 text-xl font-medium leading-snug font-heading text-blue">{{ $content->title }}</p>

    <p class="mb-6 text-sm text-grey-dark">
      <span>{{ __('By', 'sage') }} {{ $content->author }}<span>
      {{-- <span>&#124;</span>
      <time datetime="{{ $content->time }}">{{ $content->date }}</time> --}}
    </p>

    <p class="mb-6 text-grey-darker">{{ $content->excerpt }}</p>
    <p><a class="button button--blue-dark stretched-link" href="{{ $content->permalink }}">{{ __('Continue Reading', 'sage') }}</a></p>
  </div>
@else
  <div class="p-4">
    <p class="text-grey-dark">Alert Warning: No content found</p>
  </div>
@endif
