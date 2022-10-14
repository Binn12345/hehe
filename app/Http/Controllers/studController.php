<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studController extends Controller
{
    public function index()
    {
        return view('student2.index');
    }
    public function index2()
    {
        return view('student2.stdAsk');
    }
}
