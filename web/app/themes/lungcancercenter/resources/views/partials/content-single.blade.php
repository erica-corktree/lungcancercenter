<div class="container flex flex-wrap">
  <section class="order-last w-full md:w-3/4 md:border-l">
    <div class="editorcontent py-6 md:py-12 md:pt-16 md:pl-16">
      @content
    </div>

    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

    <div class="page-footer py-6 md:py-12 md:pl-16">
      @include('partials.attribution')
    </div>
  </section>

  @include('partials.sidebar-post')
</div>

@include('partials.cta-footer')
