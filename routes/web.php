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
Route::get('/Avocats/{id}', 'VitrineController@getAvocatInfo');
Route::post('/Avocats','VitrineController@getAvocatsListFilter');
Route::get('/Inscription', 'VitrineController@register');


// Avocats
Route::post('/register_avocat', 'AvocatController@register');
Route::post('/login_avocat', 'AvocatController@login');
Route::get('/accueil_avocat','AvocatController@index')->middleware('auth','checkAvocat');
Route::get('/rdv_avocat','AvocatController@rdv')->middleware('auth','checkAvocat');
Route::get('/avis_avocat','AvocatController@avis')->middleware('auth','checkAvocat');
Route::get('/visites_avocat','AvocatController@visistes')->middleware('auth','checkAvocat');
Route::get('/articles_avocat','AvocatController@articles')->middleware('auth','checkAvocat');
Route::get('/compte_avocat','AvocatController@compte')->middleware('auth','checkAvocat');

//client
Route::post('/register_client', 'ClientController@register');
Route::post('/login_client', 'ClientController@login');
Route::get('/accueil_client','ClientController@index')->middleware('auth','checkClient');
Route::get('/rdv_client','ClientController@rdv')->middleware('auth','checkClient');
Route::get('/compte_client','ClientController@compte')->middleware('auth','checkClient');

Auth::routes();