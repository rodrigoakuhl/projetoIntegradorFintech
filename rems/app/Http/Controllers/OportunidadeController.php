<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opportunity;

class OportunidadeController extends Controller
{
    public function exibirOportunidades(){
        $oportunidades = Opportunity::all();

        return view('oportunidades')->with('oportunidades', $oportunidades);
        // return view('oportunidades');

    }

    public function exibirDetalhe($id){
        $oportunidade = Opportunity::find($id);
        
        return view('oportunidades-detalhes')->with('oportunidade', $oportunidade);
    }
}
