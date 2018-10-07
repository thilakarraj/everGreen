<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function superadmin()
    {
        $message = 'asdfadsf';
        Log::emergency($message);
        Log::alert($message);
        Log::critical($message);
        Log::error($message);
        Log::warning($message);
        Log::notice($message);
        Log::info($message);
        Log::debug($message);

        return view('superadmin');
    }

    public function admin()
    {
        return view('admin');
    }

    public function user(Request $request)
    {
    	// print_r($request->session()->get('thamizh'));
        return view('user');
    }

    public function all(Request $request)
    {
    	// $request->session()->put('thamizh', 23);
        // $users = DB::select('select * from users');
        $users = DB::connection('mysql2')->select('select * from test1');
        
        // print_r($users); exit();
        // return view('user.index', ['users' => $users]);

        return view('all');
    }

    public function unauthrize()
    {
    	return view('unauthorize');
    	    // return response()->view('errors.403');

    }

    public function api()
    { echo 1; exit();
        return 1;
    }
}
