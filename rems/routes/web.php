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

Route::get('/{mode?}', function ($mode = null) {
    if($mode != null){
        return view('index')->with('mode', $mode);    
    }else{
        return view('index')->with('mode', 'investidor');
    }
});