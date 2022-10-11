<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studRegController extends Controller
{
    public function cre()
    {
        return view("student.register");
    }
}
