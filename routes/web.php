<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can index web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





// Vitrine

Route::get('/', 'VitrineController@index');
Route::get('/Avocats', 'VitrineController@getAvocatsList');
Route::post('/Avocats','VitrineController@getAvocatsListFilter');
Route::get('/Inscription', 'VitrineController@register');


// Avocats
Route::post('/register_avocat', 'AvocatController@register');
Route::get('/accueil_avocat','AvocatController@index')->middleware('auth');
Route::get('/rdv_avocat','AvocatController@rdv')->middleware('auth');
Route::get('/avis_avocat','AvocatController@avis')->middleware('auth');
Route::get('/visites_avocat','AvocatController@visistes')->middleware('auth');
Route::get('/articles_avocat','AvocatController@articles')->middleware('auth');
Route::get('/compte_avocat','AvocatController@compte')->middleware('auth');

Auth::routes();