<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sampleRegistration extends Controller
{
                    
    public function register()
    {
        return view("registration");
    }
}
