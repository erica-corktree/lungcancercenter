<section class="section section--{{ $section->acf_fc_layout }}">
  <div class="CardGrid">
    <h2 class="CardGrid__title">{{ $section->heading }}</h2>
    <p class="CardGrid__subheading">{{ $section->subheading }}</p>

    @foreach ($section->cards as $card)
      <div class="Card">
        <div class="Card__content">
          @if ($card->heading)
            <h3 class="Card__title">{{ $card->heading }}</h3>
          @endif

          <p class="Card__description" style="background-image: url( {{ $card->background_img->url }} );">{{ $card->description }}</p>

          @if ($card->link)
            <p class="Card__link"><a class="button button--primary button--card" href="{{ $card->link->url }}">{{ $card->link->title }}</a></p>
          @endif
        </div>
      </div>
    @endforeach
  </div>
</section>
