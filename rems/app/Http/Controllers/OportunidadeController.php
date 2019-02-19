<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OportunidadeController extends Controller
{
    public function exibirOportunidades(){

        return view('oportunidades');
    }
}
