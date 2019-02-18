<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaInicialController extends Controller
{
    public function showInvestidorHome(){
        return view('home-investidor')->with('mode', 'investidor');
    }

    public function showEmprestimosHome(){
        return view('home-emprestimos')->with('mode', 'emprestimos');
    }
}
