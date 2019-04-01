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

        $cadastro->name = $request->input('name');
        $cadastro->last_name = $request->input('last_name');
        $cadastro->gender = $request->input('gender');
        $cadastro->marital_status = $request->input('marital_status');
        $cadastro->mother_name = $request->input('mother_name');
        $cadastro->father_name = $request->input('father_name');
        $cadastro->phone_number_01 = $request->input('phone_number_01');
        $cadastro->phone_number_02 = $request->input('phone_number_02');
        $cadastro->city_birth = $request->input('city_birth');
        $cadastro->country_bith = $request->input('country_bith');
        $cadastro->tax_id = $request->input('tax_id');
        $cadastro->birth_date = $request->input('birth_date');
        $cadastro->id_number = $request->input('id_number');
        $cadastro->id_number_issuer = $request->input('id_number_issuer');
        $cadastro->id_number_state = $request->input('id_number_state');
        $cadastro->id_number_issue_date = $request->input('id_number_issue_date');
        $cadastro->zip_code = $request->input('zip_code');
        $cadastro->street_name = $request->input('street_name');
        $cadastro->street_number = $request->input('street_number');
        $cadastro->street_additional_information = $request->input('street_additional_information');
        $cadastro->neighborhood = $request->input('neighborhood');
        $cadastro->city = $request->input('city');
        $cadastro->state = $request->input('state');
        $cadastro->country = $request->input('country');
        $cadastro->monthly_income = $request->input('monthly_income');
        $cadastro->total_assets = $request->input('total_assets');
        $cadastro->person_of_interest = $request->input('person_of_interest');
        $cadastro->bank_number = $request->input('bank_number');
        $cadastro->bank_account_type = $request->input('bank_account_type');
        $cadastro->bank_branch_number = $request->input('bank_branch_number');
        $cadastro->account_number = $request->input('account_number');

        $cadastro->save();

        if($request->document_tax_id){
            $request->document_tax_id->store('documentos');
        }
        if($request->document_tax_id_side){
            $request->document_tax_id_side->store('documentos');
        }
        if($request->document_address){
            $request->document_address->store('documentos');
        }

        return redirect('/dashboard/cadastro/');
    }
}
