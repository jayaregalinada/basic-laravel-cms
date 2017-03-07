<?php

// Route::resource('auth', 'LoginController');

Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);
Route::get('me', ['as' => 'me', 'uses' => 'HomeController@me']);
Route::resource('post', 'PostController');
Route::resource('user', 'UserController');


Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'LoginController@index']);
    Route::post('login', ['as' => 'login', 'uses' => 'LoginController@login']);
    Route::match(['get', 'post'], 'logout', ['as' => 'logout', 'uses' => 'LoginController@logout']);
});

Route::group(['prefix' => 'post/type', 'as' => 'post.type.'], function () {
    Route::post('create', ['as' => 'store', 'uses' => 'PostController@storeType']);
    Route::get('create', ['as' => 'create', 'uses' => 'PostController@createType']);
});

Route::group(['prefix' => 'user/role', 'as' => 'user.role.'], function () {
    Route::post('create', ['as' => 'store', 'uses' => 'UserController@storeRole']);
    Route::get('create', ['as' => 'create', 'uses' => 'UserController@createRole']);
});
