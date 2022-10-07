<?php

namespace App\Http\Controllers;

use App\Model\users;
use Illuminate\Http\Request;

class userController extends Controller
{
   

    public function users()
    {
        $user = users::all();
        dd($user);
    }
    

}