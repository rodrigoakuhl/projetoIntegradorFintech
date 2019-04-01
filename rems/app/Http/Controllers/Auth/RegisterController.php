<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\ClientInformation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use DB;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function registerEmail(Request $request) {
        $input = $request->all();
        $validator = $this->validator($input);

        if($validator->passes()) {
            $user = $this->create($input)->toArray();
            $user['link'] = str_random(30);

            DB::table('users_activations')->insert(['id_user'=>$user['id'], 'token'=>$user['link']]);
            Mail::send('mail.activation', $user, function($message) use($user) {
                $message->to($user['email']);
                $message->subject('scqq.blogspot.com - Activation Code');
            });
            return redirect('login')->with('Sucess', "Enviamos um  de cocódigo de ativação via e-mail, por favor conferir!");
        }

        return back()->with('Erro', $validator->errors());
    }

    public function userActivation($token) {
        $check = DB::table('users_activations')->where('token, $token')->first();
        if (!is_null($check)) {
            return redirect('login')->with('Sucess', "Usuário já ativado");
        }

        $user->update(['is_activated' => 1]);
        DB::table('users_activations')->where('token', $token)->delete();
        return redirect('login')->with('Success', "usuário ativado com sucesso");
        
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        $cadastro = new ClientInformation;
        $cadastro->user_id = $user->id;
        $cadastro->name = $user->name;
        $cadastro->save();
        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
        
    }

}
