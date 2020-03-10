<section class="section">
  <div class="container">
    <div class="text--center">
      @if($data['title'])
        @include('partials.title', ['title' => $data['title'], 'subtitle' => $data['subtitle']])
      @endif
    </div>
    <div class="icons">
      @foreach($data['icons'] as $item)
        <a @if($item['link']) href="{{ $item['link']['url'] }}" @endif class="icons__box">
          <img class="icons__img" src="{{ $item['icon']['url'] }}">
          <h3 class="text text--white icons__title">
            {{ $item['title'] }}
          </h3>
        </a>
      @endforeach
    </div>
  </div>
</section>
{{-- <section class="section section--color">
  <div class="container text--center">
    <h2 class="title text--center m-0">
      Produkty
    </h2>
    <div class="products">
      <div class="products__item">
        <span class="products__title">
          Ekogroszek
        </span>
        <div class="products__img">
          <img src="@asset("images/ekogroszek.jpg")" alt="img">
        </div>
        <span class="products__price">
          od 800 zł
        </span>
      </div>
      <div class="products__item">
        <span class="products__title">
          WĘGIEL WYSOKOKALORYCZNY
        </span>
        <div class="products__img">
          <img src="@asset("images/wegiel.jpg")" alt="img">
        </div>
        <span class="products__price">
          od 770 zł
        </span>
      </div>
      <div class="products__item">
        <span class="products__title">
          MIAŁ
        </span>
        <div class="products__img">
          <img src="@asset("images/mial.jpg")" alt="img">
        </div>
        <span class="products__price">
          od 850 zł
        </span>
      </div>
      <div class="products__item">
        <span class="products__title">
          PELLET GOLD
        </span>
        <div class="products__img">
          <img class="products__img" src="@asset("images/pellet.jpg")" alt="img">
        </div>
        <span class="products__price">
          od 900 zł
        </span>
      </div>
    </div>
    <a href="#" class="button button--center">więcej</a>
  </div>
</section> --}}