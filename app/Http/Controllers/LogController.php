<?php

namespace App\Http\Controllers;

use App\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (!Auth::user()->isSuperAdmin(Auth::user())){
            return view('home');
        }

        $logs = Log::all();
        return view('logs.index',['logs' => $logs]);
    }
    public function destroyAll()
    {

        Log::truncate();
        $logs = Log::all();
        return view('logs.index',['logs'=> $logs]);
    }
}
