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

Route::get('/', 'DestinosController@inicio');
Route::view('/faq', 'faq');

##################   ADMIN   ##############
Route::view('/adminInicio', 'adminInicio');
/*************  USUARIOS ***********/ 
Route::get('/adminUsuarios', 'UsuariosController@index');
Route::get('/borrarUsuario/{id}', 'UsuariosController@destroy');

/********************* DESTINOS *******************/

Route::get('/adminDestinos', 'DestinosController@index');
Route::get('/destinoAlta', 'DestinosController@create');
Route::post('/destinoAlta', "DestinosController@store");
Route::post('/destinoMod', "DestinosController@update");
Route::get('/destinoMod/{id}', 'DestinosController@edit');
Route::get('/borrarDestino/{id}', 'DestinosController@destroy');
