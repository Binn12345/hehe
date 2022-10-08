<?php

namespace App\Http\Controllers;
use App\Students;
use Illuminate\Http\Request;

class dataController extends Controller
{
    public function showData()
    {
        $students = Students::all();
        return view('dTable', compact('students','students'));
        // return view('home', compact('students','students'));
    }
    

   
}
