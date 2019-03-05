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


Route::get('dashboard/oportunidades', 'OportunidadeController@exibirOportunidades');
Route::get('dashboard/cadastro', 'CadastroController@exibirCadastro');
Route::post('dashboard/cadastro', 'CadastroController@salvarCadastro');

Auth::routes();

Route::get('sair', function(){
    Auth::logout();
    return redirect('/');
});

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');