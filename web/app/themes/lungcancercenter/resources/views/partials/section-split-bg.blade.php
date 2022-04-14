<section class="section section--{{ $section->acf_fc_layout }} splitbg splitbg--right">
  <div class="splitbg__container container container--splitbg">
    <div class="splitbg__content">
      <h2 class="splitbg__title">{{ $section->heading }}</h2>
      <p class="splitbg__subheading">{{ $section->subheading }}</p>
      <p class="splitbg__link"><a class="button button--large button--primary" href="{{ $section->link->url }}">{{ $section->link->title }}</a></p>
    </div>
  </div>

  @if ($section->photo)
    <x-photo class="splitbg__photo photo--splitbg" :photo="$section->photo" />
  @endif
</section>
