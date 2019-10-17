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
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


//        $user = User::find($id);
        return view('auth.custom.registartion.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required',
            'surname' => 'required',
            'position' => 'required',
            'email' => 'required|email|unique:users',
        ]);
        
        User::update($id, $request->all());
        return Redirect::to("users")->withSuccess('Utilisateur modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/users');
    }
}
