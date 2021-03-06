<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::where('role_id' , 2)->get();
        return view('users.index', ['users' => $users]);
    }


    public function create()
    {

        return view('users.create');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/users');
    }

}
