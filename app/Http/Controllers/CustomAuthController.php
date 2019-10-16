<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class CustomAuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('login');
    }

    public function registration()
    {
        return view('auth.customRegistration.registration');
    }



    public function postRegistration(Request $request)
    {
        request()->validate([
                                'name' => 'required',
                                'name' => 'required',
                                'position' => 'required',
                                'email' => 'required|email|unique:users',
                                'password' => 'required|min:6',

                            ]);

        $data = $request->all();
        //unset($data['_token']);
        $data['role_id'] = 2;
        $data['enabled'] = true ;
        //var_dump($data);die();

        $check = User::create($data);

        return Redirect::to("users")->withSuccess('Utilisateur créé avec succes.');
    }

    public function dashboard()
    {

        if(Auth::check()){
            return view('dashboard');
        }
        return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
        return User::create([
                                'name' => $data['name'],
                                'email' => $data['email'],
                                'password' => Hash::make($data['password'])
                            ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('home');
    }
}
