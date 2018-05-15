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

//vista de educacion
Route::resource('panel/educacion', 'EducacionController');

//vista de proyectos
Route::resource('panel/proyectos', 'ProyectosController');

//vista para subir hoja de vida
Route::resource('panel/cv', 'CvController');

//vista para configurar footer
Route::resource('panel/footer', 'FooterController');



//rutas que consume vue
Route::get('/acercade', 'FrontController@descripcionVue');
Route::get('/abilities', 'FrontController@habilidadesVue');
Route::get('/experiences', 'FrontController@experienciasVue');
Route::get('/educacion', 'FrontController@educacionVue');
Route::get('/proyectos', 'FrontController@proyectosVue');
Route::get('/footer', 'FrontController@footerVue');
//ruta del front-end
Route::get('/', 'FrontController@index');
