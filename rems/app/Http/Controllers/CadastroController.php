<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientInformation;

class CadastroController extends Controller
{
    public function exibirCadastro(){
        $cadastro = ClientInformation::where('user_id', '=', auth()->user()->id)
            ->first();
        
        //dd($cadastro->usuario->email);

        return view('cadastro')->with('cadastro', $cadastro);
    }

    public function salvarCadastro(Request $request){
        $cadastro = ClientInformation::where('user_id', '=', auth()->user()->id)
        ->first();

        $cadastro->name = $request->input('name');
        $cadastro->save();

        return redirect('/dashboard/cadastro/');
    }
}
