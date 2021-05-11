@extends('layout.main')

@section('pagetitle')
    Prodotti
@endsection

@section('contentMain')
<div class="container">
    
<div class="container-prodotto">
    <div class="arrow-container">
        <div class="left-arrow">
            @if ($idProdotto > 0)
            <a href="{{route('prodotto', ['id' => $prevProdottoId])}}">
                <i class="fas fa-arrow-left"></i></a>
  
            @endif
        </div>
        <div class="right-arrow">
            @if ( $idProdotto < $maxIndex)
            <a href="{{route('prodotto', ['id' => $nextProdottoId])}}">
                <i class="fas fa-arrow-right"></i></a>

            @endif
        </div>
    </div>

    <div class="container-margin">

        <div class="product">
            <h1>{{$pasta['titolo']}}</h1>
            <img src="{{$pasta['src-h']}}" >
            <img src="{{$pasta['src-p']}}" alt="{{$pasta['titolo']}}">
            <p>{!!$pasta['descrizione']!!}</p>
        </div>
    
    </div>
</div>
</div>  
@endsection