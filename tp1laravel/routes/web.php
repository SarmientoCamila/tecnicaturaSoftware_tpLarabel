<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/salones/{zona?}', function ($zona = 'Ituzaingo') {
    return view('salones_disponibles', ['zona' => $zona]);
})->where('zona', '[A-Za-z]+')->name('salones_disponibles');

Route::get('/contacto/{numero}', function ($numero) {
    return view('contacto', ['numero' => $numero]);
})->where('numero', '[0-9]+')->name('contacto');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
