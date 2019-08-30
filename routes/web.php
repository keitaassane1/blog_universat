<?php

use App\Http\Middleware\RedirectIfAuthenticated;

Route::get('/', function () { 	return view('welcome');  });

Auth::routes();

//+++++++++++++++++++=Route::get('/home', 'HomeController@index')->name('home');

Route::get('contact', 'ContactController@index')->name('contact');


///ADMIN
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        // Categories
        Route::get('create_categorie', 'CategorieController@showFormCreate')->name('showFormCreate');
        Route::post('create_categorie', 'CategorieController@create')->name('CreateCategorie');
        Route::get('liste_categories', 'CategorieController@show')->name('liste_categories');
        Route::get('edit_categorie/{id}', 'CategorieController@edit')->name('edit_categorie');
        Route::post('update_categorie', 'CategorieController@update')->name('update_categorie');
        Route::get('delete_categorie/{id}', 'CategorieController@delete')->name('delete_categorie');

});

//AUTEUR
Route::group(['as' => 'auteur.', 'prefix' => 'auteur', 'namespace' => 'Auteur', 'middleware' => ['auth', 'auteur']], function () {
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});


