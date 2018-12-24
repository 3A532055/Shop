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

Route::get('posts', ['as' => 'posts.index', 'uses' => 'PostsController@index']);
Route::get('shop',  ['as' => 'posts.show', 'uses' => 'PostsController@show']);
Route::get('vegetables',  ['as' => 'posts.shows', 'uses' => 'PostsController@shows']);
Route::get('about',    ['as' => 'posts.about', 'uses' => 'PostsController@about']);
Route::get('contact',  ['as' => 'posts.contact', 'uses' => 'PostsController@contact']);
Route::get('news',  ['as' => 'posts.news', 'uses' => 'PostsController@news']);
