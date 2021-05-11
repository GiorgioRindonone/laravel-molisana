<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/home', function () {
    // ci va il database
     
    $data = config('paste');
    
  // ci creiamo i contenitori per i tipi di $paste
  $lunga = [];
  $corta = [];
  $cortissima = [];
    //andiamo a riempire con array associativi i contenitori di array creati sopra selezionandoli per i tipi di pasta
  foreach ($data as $key => $pasta) {

    $pasta['id'] = $key;


    if($pasta['tipo'] == 'lunga') {
      $lunga[] = $pasta;
    } elseif ($pasta['tipo'] == 'corta') {
      $corta[] = $pasta;
    } elseif ($pasta['tipo'] == 'cortissima') {
      $cortissima[] = $pasta;
    }
  }

  // abbiamo cambiato il view in home per collegarlo alla nostra pagina creata
    return view('home', [
      // dobbiamo passare data come array associativo per non crearci problemi con le variabili e le informazioni
      // creiamo un array associativo
      // 'paste' => $data
      'corte' => $corta,
      'lunghe' => $lunga,
      'cortissime' => $cortissima,
    ]);
})->name('homepage');

Route::get('/prodotto/{id}', function ($id) {

  $data = config('paste');
  $next = ($id == (count($data) - 1) ) ?  0 : $id + 1;
  $prew = ($id == 0) ? (count($data) - 1) : $id - 1;

// settiamo limite per i prodotti da visualizzare
  if ($id >= count($data)) {
    abort(404);
  }

  //facciamo il count per lo slider infinito
  if($id == count($data) - 1 ) {
    $next = 0;
    $prev = $id - 1;
  } elseif($id == 0) {
    $prev = count($data) - 1;
    $next = $id + 1;

  } else {
    $prev = $id - 1;
    $next = $id + 1;
  }

  // associamo pasta all'id dell'indice del database
  $pasta = $data[$id];


  return view('prodotto', [
    'pasta' => $pasta,
    'idProdotto' => $id,
    'maxIndex' => count($data) - 1,
    'prevProdottoId' => $prev,
    'nextProdottoId' => $next
   ]);
  // regular expression constrait per far accettare solo i numeri per usare gli indici dell'array
})->where('id', '[0-9]+')->name('prodotto');


Route::get('/ultime-notizie', function() {
  return view('news');
})->name('news');