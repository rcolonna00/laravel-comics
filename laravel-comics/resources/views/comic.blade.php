@extends('layouts.app')

@section('main_content')

    <div class="dettagli-fumetto">

        <div class="blu-bar">
            <div class="container">
                <div class="small-container">
                    <div class="img-fumetto">
                        <img src="{{ $active_comic['thumb'] }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="container-small">

                <div class="action-comics">
                    <div class="details">
                        <h2>ACTION COMICS #1000: THE DELUXE EDITION</h2>
                        <div class="navbar-tabella">
                            <div class="left-navbar">
                                <div>
                                    <span>U.S. Price</span>
                                    {{ $active_comic['price'] }}
                                </div>
                                <div>
                                    <span>AVAILABLE</span> 
                                </div>
                            </div>
                            <div class="right-navbar">
                                Check Available <i class="fas fa-sort-down"></i>
                            </div>
                        </div>
                        <div class="description">
                            {{ $active_comic['description'] }}
                        </div>
                    </div>
                    <div class="advertisement">
                        <div>ADVERTISEMENT</div>
                        <img src="{{ asset('img/adv.jpg') }}" alt="Advertisement">
                    </div>
                </div>
                

            </div>
        </div>

        <div class="background-grey">
            <div class="container">
                <div class="small-container">
                    
                    <div class="talent">
                        <h3>Talent</h3>
                        <ul>
                            <li>
                                <div class="left">
                                    Art by:
                                </div>
                                
                                   
                                <div class="right">
                                    @foreach ($active_comic['artists'] as $artist)
                                    <span>
                                        {{ $artist }}
                                    </span>
                                    @endforeach     
                                </div>
                                
                            </li>
                            <li>
                                <div class="left">
                                    Written By:
                                </div>

                                   
                                <div class="right">
                                    @foreach ($active_comic['writers'] as $writer)
                                    <span>
                                        {{ $writer }}   
                                    </span>
                                    @endforeach  
                                </div>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="specs">
                        <h3>Specs</h3>

                        <li>
                            <div class="left">
                                Series:
                            </div>
                            <div class="right">
                                {{ $active_comic['series'] }}
                            </div>
                        </li>
                        <li>
                            <div class="left">
                                U.S. Price:
                            </div>
                            <div class="right">
                                {{ $active_comic['price'] }}
                            </div>
                        </li>
                        <li>
                            <div class="left">
                                On Sale Date:
                            </div>
                            <div class="right">
                                {{ $active_comic['sale_date'] }}
                            </div>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection