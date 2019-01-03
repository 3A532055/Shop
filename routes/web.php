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

Route::get('/index', ['as' => 'posts.index', 'uses' => 'PostsController@index']);

Route::get('/shop', ['as' => 'posts.shop', 'uses' => 'PostsController@shop']);
Route::get('/vegetables',  ['as' => 'posts.vegetables', 'uses' => 'PostsController@vegetables']);

Route::get('/news',  ['as' => 'posts.news', 'uses' => 'PostsController@news']);
