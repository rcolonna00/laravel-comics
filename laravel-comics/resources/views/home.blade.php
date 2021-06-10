@extends('layouts.app')

@section('main_content')
    <!-- INIZIO MAIN -->
    <main>
        <section class="fumetti">
            <div class="container ">
                <div class="container-fumetti">
                    
                    <div class="current-series">
                        Currient Series
                    </div>
                    
                    @foreach ($comics_array as $comics)
                    <!-- Inizio Singolo Fumetto -->
                    <div class="singolo-fumetto">
                        <div class="image-fumetto">
                            <img src="{{ $comics['thumb'] }}" alt="">
                        </div>
                        <div class="nome-fumetto">{{ $comics['title'] }}</div>
                    </div>
                    <!-- Fine Singolo Fumetto -->
                    @endforeach

                </div>
                <div class="load-more">
                    Load more
                </div>
            </div>
        </section>
        <section class="genere">
            <div class="container ">
                <ul class="container-genere">
                    <li>
                        <a href="">
                            <img src="img/buy-comics-digital-comics.png" alt="">
                            digital comics
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="img/buy-comics-merchandise.png" alt="">
                            dc merchandise
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="img/buy-comics-subscriptions.png" alt="">
                            subscription
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="img/buy-comics-shop-locator.png" alt="">
                            comic shop locatior
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="img/buy-dc-power-visa.svg" alt="">
                            dc power visa
                        </a>
                    </li>
                </ul>
            </div>
            
        </section>
    </main>
    <!-- FINE MAIN -->
@endsection