<section class="section section--{{ $section->acf_fc_layout }} py-12 bg-white text-grey-darker">
  <div class="container flex flex-wrap">
    <div class="editorcontent w-full md:w-2/3 mb-8 md:mb-0 md:pr-16">
      {!! $section->content !!}
    </div>

    <div class="w-full md:w-1/3">
      <div class="editorcontent max-w-md mx-auto p-6 text-black bg-grey-lighter overflow-hidden shadow-lg border">
        {!! $section->card_content !!}
      </div>
    </div>
  </div>
</section>
