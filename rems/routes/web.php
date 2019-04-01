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

Route::get('/', 'PaginaInicialController@showInvestidorHome')->name('home');

Route::get('/investidor', 'PaginaInicialController@showInvestidorHome');
Route::get('/emprestimos', 'PaginaInicialController@showEmprestimosHome');


Route::get('dashboard/oportunidades', 'OportunidadeController@exibirOportunidades');
Route::get('dashboard/oportunidade-detalhe/{id}', 'OportunidadeController@exibirDetalhe');
Route::get('dashboard/cadastro', 'CadastroController@exibirCadastro');
Route::post('dashboard/cadastro', 'CadastroController@salvarCadastro');
Route::get('dashboard/investimentos', 'InvestimentoController@exibirInvestimento');
Route::post('dashboard/investir', 'InvestimentoController@investir');
Route::get('dashboard/investimento-cancelar/{id}', 'InvestimentoController@cancelarInvestimento');

Auth::routes();
// Auth::get('/home', 'HomeController@index');
Auth::routes(['verify' => true]);



Route::get('sair', function(){
    Auth::logout();
    return redirect('/');
});

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');