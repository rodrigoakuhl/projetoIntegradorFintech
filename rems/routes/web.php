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

Route::get('/', 'PaginaInicialController@showInvestidorHome');

Route::get('/investidor', 'PaginaInicialController@showInvestidorHome');
Route::get('/emprestimos', 'PaginaInicialController@showEmprestimosHome');


Route::get('dashboard/oportunidades', function(){
    return view('pages-starter');
});

Auth::routes();


Route::get('sair', function(){
    Auth::logout();
    return redirect('/');
});
