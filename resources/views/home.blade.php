<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body>
    @include('parts.header')
    <main>
      <!-- facciamo il dd per far apparire l'array del database e fare un check -->
      <!-- {{ dd($paste) }} -->
      <!-- {{dd($corta)}} -->

      <section>
        <!-- section lunghe -->
        <h2>Le lughe</h2>
        <div class="cards">
          @foreach($lunghe as $pasta)
          <div class="card">
            <!-- ci stampiamo all'interno della card la src -->
            <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
          </div>
          @endforeach
        </div>
      </section>
      <section>
        <!-- section lunghe -->
        <h2>Le corte</h2>
        <div class="cards">
          @foreach($corte as $pasta)
          <div class="card">
            <!-- ci stampiamo all'interno della card la src -->
            <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
          </div>
          @endforeach
        </div>
      </section>
      <section>
        <!-- section lunghe -->
        <h2>Le cortissime</h2>
        <div class="cards">
          @foreach($cortissime as $pasta)
          <div class="card">
            <!-- ci stampiamo all'interno della card la src -->
            <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
          </div>
          @endforeach
        </div>
      </section>


    </main>
    @include('parts.footer')
  </body>
</html>
