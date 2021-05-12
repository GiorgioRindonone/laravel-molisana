<footer>
    <div class="container">
        <div class="container-footer">
            <div class="container-margin column-box">
                <div class="column col-1">
                    <div class="logo-footer">
                        <img src="{{ asset('../../img/marchio-sito-test.png') }}" alt="">
                    </div>
                    <ul>
                        <li>
                            <p>Ragione siciale La Molisana S.P.A.</p>
                        </li>
                        <li>
                            <p>Sede legale: Contrada Colle delle Api, 100/A</p>
                        </li>
                        <li>
                            <p>86100 - Campobasso(CB)</p>
                        </li>
                        <li>
                            <p>Pec: lamolisana@pec.it</p>
                        </li>
                        <li>
                            <p>Tel: +39 0874 4981</p>
                        </li>
                        <li>
                            <p>Fax: +39 0874 629584</p>
                        </li>
                        <li>
                            <p>info@lamolisana.it (per segnalazioni degli utenti)</p>
                        </li>
                        <li>
                            <p>commerciale@lamolisana.it</p>
                        </li>
                        <li>
                            <p>export@lamolisana.it</p>
                        </li>
                        <li>
                            <p>numero verde 800918081</p>
                        </li>
                        <li>
                            <p>telefono 3801292455</p>
                        </li>
    
                    </ul>
        
                </div>
                <div class="column col-2">
                        <h3>
                            Pastificio
                        </h3>
                    <ul>
                        @foreach (config('products')['pastificio'] as $key => $item)
                        <li>
                            <a href="{{$item['link']}}"><p>{{$item['voce']}}</p></a>
                        </li>
                        @endforeach

                    </ul>
                    <h3>
                        Prodotti
                    </h3>
                {{-- dato che è un array associativo key contiene il nome della chiave altrimenti l'indice di iterazione --}}
                    <ul>   
                        @foreach (config('products')['prodotti'] as $key => $item)
                        <li>
                            <a href="{{$item['link']}}"><p>{{$item['voce']}}</p></a>
                        </li>
                        @endforeach
                     
                    </ul>




        
                </div>
                <div class="column col-3">
                    <h3>
                        Collezione da Chef
                    </h3>
                    <ul>
                        @foreach (config('products')['collezioneChef'] as $key => $item)
                        <li>
                            <a href="{{$item['link']}}"><p>{{$item['voce']}}</p></a>
                        </li>
                        @endforeach
    
                    </ul>
        
                </div>

        
              
            </div>
    
        </div>

    </div>

</footer>