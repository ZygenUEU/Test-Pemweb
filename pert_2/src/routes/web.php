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
    return view('welcome');
});

Route::get('/sample', function () {
    return view('sample');
});

Route::get('/lgame', function() {
    return view('layouts.main');
})->name('Home');

Route::get('/gameinfo', function () {
    return view('layouts.gameInfo');
})->name('GameInfo');

Route::get('/about', function (){
    return view('layouts.about');
})->name('About');

Route::get('/contact', function (){
    return view('layouts.contact');
})->name('Contact');