<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Socialite;
use App\User;
use App\ClientInformation;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard/oportunidades';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

//************************************************************************** */

    /* Redireciona para Facebook, Git, ....*/
    public function redirectToProvider($provider) {
        return Socialite::driver($provider)->redirect();
    }

    /* Retorno do usuário do Facebook, GRT,....*/
    public function handleProviderCallback($provider) {
        $user = Socialite::driver($provider)->user(); /* retono dos dados do usuário */

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }

    /* Pesquisa o usuário pelo usuário(provider_id) ou email  ....*/
    public function findOrCreateUser($user, $provider) {
        $authUser = User::where('provider_id', '=', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }

        $authUser = User::Where('email', '=', $user->email)->first();
        if ($authUser) {
            return $authUser;
        }

    /* Cria novo usuário se não achar por provider_id ou email  ....*/
        $authUser = new User;
        $authUser->name = $user->name;
        $authUser->email = $user->email;
        $authUser->provider = $provider;
        $authUser->provider_id = $user->id;
        $authUser->password = '1';
        $authUser->photo = $user->avatar;
        $authUser->save();
        $cadastro = new ClientInformation;
        $cadastro->user_id = $authUser->id;
        $cadastro->name = $authUser->name;
        $cadastro->save();
        return $authUser;

//************************************************************************** */

    }
}