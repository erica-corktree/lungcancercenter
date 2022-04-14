<a href="#main-content" class="skip-link">{{ __('Skip to main content', 'sage') }}</a>

@include('partials.header')

<main class="main overflow-hidden" id="main-content">
  @yield('content')
</main>

@include('partials.footer')
