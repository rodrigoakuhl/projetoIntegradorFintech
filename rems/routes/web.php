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


Route::get('/{mode?}', 'HomeController@showHome');

Route::post('usuario-cadastrar', 'UsuariosController@cadastrar');
Route::post('usuario-login', 'UsuariosController@login');
Route::get('dashboard/oportunidades', function(){
    return view('pages-starter');
});