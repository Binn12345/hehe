<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userManageController extends Controller
{
    
    // Homepage
    public function index()
    {
        return view('management.index');
    }


    // creat account by userRole
    public function create_At_account()
    {
        return view('management.subs.r');
    }

    // fair warning ReadUS
    public function fair_warning()
    {
        return view('management.web.f');
    }

    // administrator PROFILE
    public function mProfile()
    {
        return view('management.profile.mprofile');
    }

    // all accounts that created . 
    public function list()
    {
        return view('management.subs.adminList');
    }

    // made by users include role,actor name
    public function trail()
    {

    }


}
