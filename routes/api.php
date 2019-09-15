<?php

Route::group(['middleware' => 'api','prefix' => 'auth','namespace' => 'API',],
function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});


Route::group(['middleware' => 'auth:api','prefix' => 'blogu','namespace' => 'API',],
function ($router) {

    //API Categories
    Route::resource('categories', 'CategorieController');

    
});

