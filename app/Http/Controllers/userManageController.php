<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userManageController extends Controller
{
    

    public function home()
    {
        return view('management.index');
    }



}
