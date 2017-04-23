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
/* ---------------------------------------------   Pages */
Route::get('/', 'PagesController@index');

/* ---------------------------------------------   Dirtvids */
Route::get('/dirtvids', 'DirtvidsController@index');
Route::get('/dirtvids/create', 'DirtvidsController@create');
Route::get('/dirtvids/{id}', 'DirtvidsController@show');

Route::post('/dirtvids', 'DirtvidsController@store');


Auth::routes();

Route::get('/home', 'HomeController@index');
