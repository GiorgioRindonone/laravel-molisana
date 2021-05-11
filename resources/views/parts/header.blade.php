<header>
  <div class="container">
    <div class="logo">
      <img src="{{ asset('../../img/marchio-sito-test.png') }}" alt="">
    </div>
    <nav class="main-nav">
      <div class="hamb-menu"><a href=""><i class="fas fa-bars"></i></a></div>
      <ul>
        <li class="{{  Route::getCurrentRoute()->getName() == 'homepage' ? 'active' : '' }}"><a href="{{route('homepage')}}">Home</a></li>
        <li class="{{  Route::getCurrentRoute()->getName() == 'prodotto' ? 'active' : '' }}"><a href="{{route('prodotto', ['id' => 0])}}">Prodotti</a></li>
        <li class="{{  Route::getCurrentRoute()->getName() == 'news' ? 'active' : '' }}"><a href="{{route('news', ['id' => 0])}}">News</a></li>
      </ul>
    </nav>
  </div>
</header>
