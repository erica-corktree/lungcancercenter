@extends('layouts.app')

@section('content')
  <div class="relative py-8 md:py-10 text-blue-dark bg-grey-light">
    <div class="container">
      <h1 class="font-medium text-2xl md:text-4xl">
        {!! sprintf(__('Search Results for "%s"', 'sage'), get_search_query()) !!}
      </h1>
    </div>
  </div>

  <div class="container py-8 md:py-12">
    @noposts
      <x-alert type="warning" message="Sorry, no results were found." />
      {!! get_search_form(false) !!}
    @endnoposts

    @hasposts
      <x-alert type="" message="About {{ $results_count }} results" />

      <div>
        @posts
          <article class="mb-6 last:mb-8 pb-6 first:pt-6 border-b first:border-t">
            <header>
              <h2 class="font-medium text-lg"><a class="text-blue-dark" href="@permalink">@title</a></h2>
              <p><a class="text-teal" href="@permalink">@permalink</a></p>
              @includeWhen(get_post_type() === 'post', 'partials/entry-meta')
            </header>

            <div class="mt-2 text-grey-dark">
              @if (get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true))
                {{ get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true) }}
              @else
                @excerpt
              @endif
            </div>
          </article>
        @endposts
        </div>
    @endhasposts
    @include('partials.pagination')
  </div>
@endsection
