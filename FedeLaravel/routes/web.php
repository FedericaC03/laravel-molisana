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
    return view('home');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/news', function () {
    return view('news');
});


Route::get('/prodotti', function () {

    $data = config('pasta');

    $tipopasta  = [];

    foreach ($data as $key => $prodotto) {
        $prodotto["id"] = $key;
        $tipopasta[$prodotto["tipo"]][] = $prodotto;
    }

        return view('prodotti', ["prodotto" => $data]);
});



Route::get('/prodotti/show/{id}', function ($id) {
    $prodotto = config("pasta.$id");

    return view('prodotto', ["id" => $id], ["prodotto" => $prodotto]);
});
