<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDashController extends Controller
{
    
    public function index()
    {
        return view('std3.index');
    }
}
