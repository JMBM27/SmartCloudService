<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/login';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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

      public function store(Request $request)
    {
        $request->validate([
            'id'         => 'required|min:1|max:9|exists:usuario,id',
            'email'      => 'required|min:8|max:50|email|',
            'conf-email' => 'required|min:8|max:50|email|same:email',
            'pass'       => 'required|min:8|',
            'conf-pass'  => 'required|min:8|same:pass'
        ]);
            $registro             = new User;
            $registro->id         = $request->get('id');
            $registro->email      = $request->get('email');
            $registro->contraseña = hash::make($request->get('pass'));
            $registro->tipo       = 3;
            $registro->telefono   = "000";
            $registro->save();
            return redirect('user.sign');
    }
}
