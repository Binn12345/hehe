<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentRegisterController extends Controller
{
    public function studRegis(){
        return view('student.register');
    }
}
