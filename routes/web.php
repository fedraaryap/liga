<?php

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

Route::get('/EnglishPremierLeague', 'LigainggrisController@index');
Route::get('/GermanBundesliga','LigajermanController@index');
Route::get('/ItalianSerieA','LigaitaliaController@index');
Route::get('/SpanishLaLiga','LigaspanyolController@index');
Route::get('/Liga1','LigaindoController@index');
