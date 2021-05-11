@extends('layout.main')

@section('pageTitle')
    Home
@endsection

@section('contentMain')
<div class="container">
  <div class="container-main ">
    <div class="container-margin">

      <section>
        <!-- section lunghe -->
        <h2>Le Lunghe</h2>
        <div class="cards">
          @foreach($lunghe as $pasta)
          <div class="card">
            <!-- ci stampiamo all'interno della card la src -->
            <a href="{{route('prodotto', [ 'id' => $pasta['id'] ])}}"><img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}"></a>          
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
            <a href="{{route('prodotto', [ 'id' => $pasta['id'] ])}}"><img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}"></a>          
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
            <a href="{{route('prodotto', [ 'id' => $pasta['id'] ])}}"><img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}"></a>          
          </div>
          @endforeach
        </div>
      </section>
  
    </div>
  
  </div>  
</div>
@endsection
