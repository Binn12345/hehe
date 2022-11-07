<?php

namespace App\Http\Controllers;
use App\Helpers\Helper;
use App\Students;
use App\User;
use App\Admin;
use App\Stud;
use App\studentModel;
use App\userlogs;
use App\announcement;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Excel;
use PDF;     
use Illuminate\Support\Facades\DB;
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

    // add role register
    public function addRole(Request $request)
    {

        $request->validate([

            'fname'  =>     [ 'regex:/^[^\d]+$/', 'max:50'],
            'email'  =>     [ 'string', 'regex:/.+@(gmail|yahoo)\.com$/'],
            'p'      =>     [ 'regex:/^[^\d]+$/', 'max:50'],


        ]);


        $x = rand();
        $c = "";
        $c = $x;
        $year = date("Y").'M';
        $userID = Helper::IDGenerator(new Admin, 'user_id', 5, $year);


        User::create([
            'name'          =>$request->fname,
            'email'         =>$request->email,
            'password'      =>bcrypt($request->p),
            // 'username' => $request->username,
           
            'role'          => $request->role,
            'key'           => $c,
            // 'user_id' => $userID,
            
        ]);

        Admin::create([
            
            'role'       => $request->role,
            'key'        => $c,
            'user_id'    => $userID,
            'created_at' =>now(),
            
        ]);
        
        

        return redirect()->route('userCreate')->with('success', 'account has been successfully added.');
    }

    // dashboard
    public function dashboard()
    {
        return view('management.dashboard');
    }

}
