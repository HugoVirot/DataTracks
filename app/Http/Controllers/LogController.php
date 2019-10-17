<?php

namespace App\Http\Controllers;

use App\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
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
