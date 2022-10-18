<?php

namespace App\Http\Controllers;
use App\User;
use App\userlogs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index(Request $request)
    {

        $state= "You are now logged in";
        userlogs::create([

            'actor'             =>$request->user()->name,
            'state'             =>$state,
            'role'              =>$request->user()->role,
            'created_at'        =>now(),
            
        ]);  
        return view('/');
    }
}
