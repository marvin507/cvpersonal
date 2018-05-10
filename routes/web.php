<?php

//inicio de rutas de acceso

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout');

//fin de rutas de acceso

//vista del panel principal
Route::get('panel', 'HomeController@index');

//vista de descripcion
Route::resource('panel/descripcion', 'DescController');

//vista de habilidades
Route::resource('panel/habilidades', 'HabilidadesController');

//vista de Experiencias
Route::resource('panel/experiencias', 'ExperienciasController');



//ruta que consume vue
Route::get('/abilities', 'FrontController@habilidadesVue');
//ruta del front-end
Route::get('/', 'FrontController@index');
