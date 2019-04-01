<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
use App\ClientInformation;

class InvestimentoController extends Controller
{
    
    public function exibirInvestimento(){
        $cadastro = ClientInformation::where('user_id', '=', auth()->user()->id)
        ->first();
        
        $operacoes = Operation::where('client_information_id', '=', $cadastro->id)
        ->get();

        /* dd($operacoes[0]->oportunidade->company_name); */

        return view('investimentos')->with('operacoes', $operacoes);
    }
    
    
    public function investir(Request $request){    
        $cadastro = ClientInformation::where('user_id', '=', auth()->user()->id)
        ->first();

        $operacao = new Operation;
        $operacao->client_information_id = $cadastro->id;
        $operacao->oportunity_id = $request->input('oportunity');
        $operacao->amount = $request->input('amount');
        $operacao->status = 1;

        $operacao->save();
        
        return redirect('/dashboard/investimentos');
    }

    public function cancelarInvestimento($id){
        $operacao = Operation::where('id', '=', $id);
        $operacao->delete();
        return redirect('/dashboard/investimentos');
    }
}
