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
    return view('principal');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::apiResource('libro','LibrosController');
Route::apiResource('capitulo','CapitulosController');



//Bible

Route::get('/antiguo', 'RoutesController@antiguo')->name('antiguo');
Route::get('/nuevo', 'RoutesController@nuevo')->name('nuevo');
Route::get('/libros/{id}', 'RoutesController@libros')->name('libros');
Route::get('/libros/{id_libro}/capitulos/{id_capitulo}', 'RoutesController@capitulos')->name('capitulos');
Route::get('/editar', 'RoutesController@editar')->name('editar');

