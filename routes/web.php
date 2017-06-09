<?php

/* ---------------------------------------------   Pages */
Route::get('/', 'PagesController@index');
Route::get('/trails', 'PagesController@trails');
Route::get('/shops', 'PagesController@shops');
Route::get('/pics', 'PagesController@pics');

/* ---------------------------------------------   Dirtvids */
Route::get('/dirtvids', 'DirtvidsController@index');
Route::get('/dirtvids/create', 'DirtvidsController@create');
Route::get('/dirtvids/{id}', 'DirtvidsController@show');
Route::get('/dirtvids/{id}/edit', 'DirtvidsController@edit');
Route::post('/dirtvids/{id}/edit', 'DirtvidsController@update');

Route::post('/dirtvids', 'DirtvidsController@store');

/* ---------------------------------------------   Profiles */
Route::get('/profiles', 'ProfilesController@index');
Route::get('/profiles/create', 'ProfilesController@create');
Route::get('/profiles/{id}', 'ProfilesController@show');
Route::get('/profiles/{id}/edit', 'ProfilesController@edit');
Route::post('/profiles/{id}/edit', 'ProfilesController@update');
Route::post('/profiles', 'ProfilesController@store');

/*  Admin Stuff */
Route::get('/admin/roles', 'RolesController@index');
Route::get('/admin/roles/create', 'RolesController@create');
Route::post('/admin/roles', 'RolesController@store');

Route::get('/admin/users', 'UsersController@index');
Route::get('/admin/users/{id}', 'UsersController@edit');
Route::post('/admin/users/{id}/update', 'UsersController@update');


Auth::routes();

Route::get('/home', 'HomeController@index');
