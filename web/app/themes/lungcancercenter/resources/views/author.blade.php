@extends('layouts.app')

@section('content')
  @include('partials.profile-header', ['profile' => $author])

  <div class="container py-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @if (! have_posts())

      {!! get_search_form(false) !!}
    @endif

    @while (have_posts()) @php(the_post())
      @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endwhile

    {!! get_the_posts_navigation() !!}
  </div>
@endsection
