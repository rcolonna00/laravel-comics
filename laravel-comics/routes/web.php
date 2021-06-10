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

Route::get('/', function () {
    $comics_array = config('comics');
    
    $data = [
        'comics_array' => $comics_array
    ];

    return view('home', $data);
})->name('home');

Route::get('/comics-details/{id}', function ($id) {
    $comics_array = config('comics');

    $product = [];
    foreach($comics_array as $comic){
        //dd( (int) $id);
        if($comic['id'] == $id) {
            $active_comic = $comic;
        }
    }

    // Se non trovo prodotto, errore 404!
    if( empty( $active_comic )) {
        abort('404');
    }

    // Passiamo i dettagli alla view se troviamo il fumetto
    $data = [
        'active_comic' => $active_comic
    ];

    //Altrimenti stampo la view con il prodotto
    return view('comic', $data);

})->name('comic');
