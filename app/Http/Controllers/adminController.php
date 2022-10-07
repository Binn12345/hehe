<?php

namespace App\Http\Controllers;
use App\Students;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function login()
    {
        return view("index3");
    }
}
