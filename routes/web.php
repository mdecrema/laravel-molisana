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
    return view('home');
})->name('home');


Route::get('/prodotti', function () {

    $data = config('pastaDB');

    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach ($data as $key => $product) {
        if ($product["tipo"] == "lunga") {
            $lunga[$key] = $product;
        } elseif ($product["tipo"] == "corta") {
            $corta[$key] = $product;
        } elseif ($product["tipo"] == "cortissima") {
            $cortissima[$key] = $product;
        }
    }

    return view('prodotti', $lunga, $corta, $cortissima);
})->name('prodotti');

Route::get('/prodotto/show/{id}', function ($id) {
    
    $prodotto = config("pastaDB.$id");
    return view('prodotto', ['data' => $prodotto]);
})->name('details');


Route::get('/news', function () {
    return view('news');
})->name('news');