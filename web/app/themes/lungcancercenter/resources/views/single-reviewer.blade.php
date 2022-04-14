@extends('layouts.app')

@section('content')
  @while (have_posts()) @php(the_post())
    @include('partials.profile-header', ['profile' => $reviewer])

    <div class="container flex flex-wrap">
      <section class="w-full py-6 md:py-8">
        @if ($reviewer->reviewed)
          <div class="editorcontent">
            <h2>{{ __('Content Reviewed', 'sage') }}</h2>
          </div>

          <div class="mt-8 border-t border-l border-r">
            @posts($reviewer->reviewed)
              <div class="relative p-2 pl-4 flex items-center justify-between hover:bg-grey-lightest border-b">
                <p class="text-lg font-medium text-blue-dark">
                  @title

                  <span class="font-normal text-grey-dark">
                    {{ __('Last Reviewed:', 'sage') }} @field(get_post_type() . '_reviewed_date')
                  </span>
                </p>

                <a class="button button--blue-dark stretched-link" href="@permalink">
                  @svg('images.chevron-right', 'inline-block w-4 h-auto')
                </a>
              </div>
            @endposts
          </div>
        @endif
      </section>
    </div>
  @endwhile
@endsection
