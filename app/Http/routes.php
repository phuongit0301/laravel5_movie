<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'News\NewsController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/movies', 'Movies\MoviesController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    
    Route::get('/', [ 'as' => 'admin.layout.index', 'uses' => 'Admin\AdminController@index']);

    Route::resource('movies',  'Movies\MoviesController');

});