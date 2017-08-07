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

Route::get('/', 'IndexController@getIndex');
Route::get('/service', 'ServiceController@getIndex');
Route::get('/gallery', 'GalleryController@getIndex');
Route::get('/news', 'NewsController@getIndex');
Route::get('/contact', 'ContactController@getIndex');


