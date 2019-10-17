<?php

namespace App\Http\Controllers;

use App\Role;
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
                                'surname' => 'required',
                                'position' => 'required',
                                'email' => 'required|email|unique:users',
                                'password' => 'required|min:6',

                            ]);

        $data = $request->all();
        $role = Role::where('name','admin')->get();
        $data['role_id'] = $role[0]->id;
        $data['enabled'] = true ;
        $data['password'] = Hash::make($data['password']) ;
        User::create($data);

        return Redirect::to("users")->withSuccess('Utilisateur créé avec succes.');
    }

}
