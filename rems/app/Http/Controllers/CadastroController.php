<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientInformation;

class CadastroController extends Controller
{
    public function exibirCadastro(){
        $cadastro = ClientInformation::where('user_id', '=', auth()->user()->id)
            ->get();

        return view('cadastro')->with('cadastro', $cadastro);
    }
}
