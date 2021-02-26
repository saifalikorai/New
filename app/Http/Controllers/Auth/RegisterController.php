<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Admin;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'register_name' => ['required', 'string', 'max:255'],
            'register_email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'register_password' => ['required', 'string', 'min:8', 'confirmed'],
            'birthdate' => ['required'],
        ]);

        $validator->setAttributeNames([
            'register_name' => 'name',
            'register_email' => 'email',
            'register_password' => 'password',
        ]);

        return $validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['register_name'],
            'email' => $data['register_email'],
            'password' => Hash::make($data['register_password']),
            'birthdate' => $data['birthdate'],
            'profile_pic_path' => 'https://cdn.pixabay.com/photo/2014/04/02/14/10/female-306407_960_720.png'
        ]);

        return $user;
    }

    public function showAdminRegisterForm()
    {
        return view('auth.admin-register');
    }

    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended(route('admin.dashboard'));
    }

}
