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

Route::get('/', [ 'uses' => 'VitrineController@index' , 'as' => 'home']);
Route::get('/professionnels', 'VitrineController@getProfessionnelsList');
Route::get('/professionnels/{id}', 'VitrineController@getProfessionnelInfo');
Route::post('/professionnels','VitrineController@getProfessionnelsListFilter');
Route::get('/Inscription', 'VitrineController@register');
Route::get('/faq', 'VitrineController@faq');
Route::get('/nous', 'VitrineController@nous');
Route::get('/contact', 'VitrineController@contact');
Route::get('/espace_pro', 'VitrineController@espacePro');
Route::post('/rendezvous', 'VitrineController@rendezvous');
Route::post('/login_user', 'VitrineController@loginUser');
Route::post('/demande_acces', 'VitrineController@newDemande');
Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');



// Avocats
Route::post('/register_professionnel', 'ProfessionnelController@register');
Route::post('/login_professionnel', 'ProfessionnelController@login');
Route::get('/accueil_professionnel','ProfessionnelController@index')->middleware('auth','checkAvocat');
Route::get('/rdv_professionnel','ProfessionnelController@rdv')->middleware('auth','checkAvocat');
Route::get('/avis_professionnel','ProfessionnelController@avis')->middleware('auth','checkAvocat');
Route::get('/visites_professionnel','ProfessionnelController@visistes')->middleware('auth','checkAvocat');
Route::get('/articles_professionnel','ProfessionnelController@articles')->middleware('auth','checkAvocat');
Route::get('/compte_professionnel','ProfessionnelController@compte')->middleware('auth','checkAvocat');
Route::get('/creer_article_professionnel','ProfessionnelController@creerArticle')->middleware('auth','checkAvocat');
Route::post('/store_article_professionnel','ProfessionnelController@storeArticle')->middleware('auth','checkAvocat');
Route::get('/avis_professionnel','ProfessionnelController@avis')->middleware('auth','checkAvocat');
Route::post('/professionnel/update-{id}',[
    'uses' => 'ProfessionnelController@updatePro',
    'as' => 'professionnel.modify'
]);
Route::get('/horaires_professionnel','ProfessionnelController@horaires')->middleware('auth','checkAvocat');
Route::post('/update_horaires','ProfessionnelController@updateHoraires')->middleware('auth','checkAvocat');


//client
Route::post('/register_client', 'ClientController@register');
Route::post('/login_client', 'ClientController@login');
Route::get('/accueil_client','ClientController@index')->middleware('auth','checkClient');
Route::get('/rdv_client','ClientController@rdv')->middleware('auth','checkClient');
Route::get('/compte_client','ClientController@compte')->middleware('auth','checkClient');


//Admin
Route::post('/register_admin', 'AdminController@register');
Route::get('/login_admin', 'AdminController@loginPage');
Route::post('/login_amdin', 'AdminController@login');
Route::get('/Admin','AdminController@index')->middleware('auth','checkAdmin');
Route::get('/rdv_admin','AdminController@rdv')->middleware('auth','checkAdmin');
Route::get('/compte_admin','AdminController@compte')->middleware('auth','checkAdmin');

//Blog
Route::get('/blog',[
    'uses' => 'AnnouncementsController@index',
    'as'=> 'blog'
]);

Route::get('/blog/article/article-{slug}',[
    'uses' => 'AnnouncementsController@single',
    'as' => 'blog-single'
]);

Route::get('/blog/categorie/{name}',[
    'uses' => 'AnnouncementsController@category',
    'as' => 'blog-category'
]);

//Reviews
Route::post('/store_rating/{visite}',[
    'uses' => 'ReviewsController@storeReview',
    'as' => 'review.store'
]);

Route::post('/update_rating/{visite}',[
    'uses' => 'ReviewsController@updateReview',
    'as' => 'review.update'
]);

Route::get('/delete_rating/{visite}',[
    'uses' => 'ReviewsController@deleteReview',
    'as' => 'review.delete'
]);

Route::post('/store_rating','ReviewsController@storeReview')->middleware('auth','checkClient');


Route::get('/test', 'VitrineController@test');

Auth::routes();
Route::get('/admin/login','VitrineController@index');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    // Custom voyager routes
    Route::post('/announcements',[
        'uses' => 'CustomVoyagerController@storeAnnouncement',
        'as' => 'voyager.announcements.store'
    ]);

    Route::put('/announcements/{announcement}',[
        'uses' => 'CustomVoyagerController@updateAnnouncement',
        'as' => 'voyager.announcements.update'
    ]);
});

