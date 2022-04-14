@extends('layouts.app')

@section('content')
  @if (isset($blog->featured_post))
    @include('partials.blog-featured-post', ['id' => $blog->featured_post])
  @endif

  <div class="container py-12">
    @noposts
      <x-alert type="warning" message="Sorry, no results were found." />
      {!! get_search_form(false) !!}
    @endnoposts

    @hasposts
      <h2 class="mb-8 text-3xl font-medium text-blue-dark">{!! $blog->heading ?? __('Latest Articles', 'sage') !!}</h2>

      <div class="mb-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @posts
          @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
        @endposts
      </div>
    @endhasposts

    @include('partials.pagination')
  </div>
@endsection
