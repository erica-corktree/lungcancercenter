<section class="section section--{{ $section->acf_fc_layout }} pt-10">
  <div class="editorcontent container">
    <h2>{{ $section->heading }}</h2>
  </div>

  <div class="bg-grey-lighter mt-8 py-12">
    <div class="container">
      @shortcode('[hf_form slug="cta"]')
    </div>
  </div>
</section>
