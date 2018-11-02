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





// Vitrine

Route::get('/', 'VitrineController@index');
Route::get('/Avocats', 'VitrineController@getAvocatsList');
Route::get('/Inscription', 'VitrineController@register');

// Avocats
Route::post('/register_avocat', 'AvocatController@register');

Auth::routes();