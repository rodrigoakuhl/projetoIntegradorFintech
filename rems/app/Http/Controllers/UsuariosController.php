<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuariosController extends Controller
{
    public function cadastrar(Request $request){
        $usuario = new Usuario;
        
        if($request->input('cadastrar_senha') == $request->input('cadastrar_confirmarSenha')){
            $usuario->email = $request->input('cadastrar_email');
            $senha_hash = password_hash($request->input('cadastrar_senha'), PASSWORD_DEFAULT);
            $usuario->senha = $senha_hash;
            $usuario->save();
            return view('cadastro-sucesso');
        }else{
            return redirect('/'); //TODO: Gerar algum alerta de senha não confere
        }
    }

    public function login(Request $request){
        $usuario = Usuario::where('email', $request->input('login_email'))->first(); //TODO: Modificar no banco para email ser unico
        if($usuario == null){
            return redirect('/'); //TODO: Gerar algum alerta de senha ou email incorretos
        }else{
            $verificar_senha = password_verify($request->input('login_senha'), $usuario->senha);
            if($verificar_senha){
                return view('pages-starter'); //TODO: Como redirecionar para pagina do usurio, garantido que o login foi realizad e não acesso direto
            }else{
                return redirect('/'); //TODO: Gerar algum alerta de senha ou email incorretos
            }           
        }

 
    }
}
