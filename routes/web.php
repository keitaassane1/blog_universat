<?php


Route::get('/', function () { 	return view('welcome');  });
Route::get('post/{id}', 'WelcomeController@read_post')->name('read_post');


Auth::routes();

//+++++++++++++++++++=Route::get('/home', 'HomeController@index')->name('home');

Route::get('contact', 'ContactController@index')->name('contact');


Route::redirect('/admin', '/admin/dashboard', 301);
Route::redirect('/auteur', '/auteur/dashboard', 301);

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

        // Roles
        Route::get('liste_roles', 'RoleController@show')->name('liste_roles');
        Route::get('create_role_view', 'RoleController@create_role_view')->name('create_role_view');
        Route::post('create_role', 'RoleController@store')->name('create_role');
        Route::get('edit_role/{id}', 'RoleController@edit')->name('edit_role');
        Route::post('update_role', 'RoleController@update')->name('update_role');
        Route::get('delete_role/{id}', 'RoleController@delete')->name('delete_role');

        Route::get('posts','PostController@show')->name('posts');
        Route::get('update_status_post/{id}', 'PostController@update_status_post')->name('update_status_post');

});

//AUTEUR
Route::group(['as' => 'auteur.',
             'prefix' => 'auteur',
             'namespace' => 'Auteur',
             'middleware' => ['auth', 'auteur']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    //Posts
    Route::get('posts','PostController@show')->name('posts');
    Route::get('create_post','PostController@create_post')->name('create_post');
    Route::post('create_post','PostController@store')->name('create_post');
    Route::get('edit_post/{id}', 'PostController@edit')->name('edit_post');
    Route::post('update_post', 'PostController@update')->name('update_post');
    Route::get('delete_post/{id}', 'PostController@delete')->name('delete_post');


});


