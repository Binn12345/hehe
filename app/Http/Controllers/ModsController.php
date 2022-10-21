<?php

namespace App\Http\Controllers;
use App\Helpers\Helper;
use App\Students;
use App\User;
use App\Admin;
use App\Stud;
use App\announcement;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Excel;
use PDF;     
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ModsController extends Controller
{

    public function index()
    {
        return view('layouts.index');
    }
    // MOD ONLY FOR STUDENT
    public function store(Request $request)
    {
        $x = rand();
        $b = "";
        $b = $x;
        $year = date("Y").'A';
        $userID = Helper::IDGenerator(new User, 'user_id', 5, $year);
        
        
        Students::create([

            'Fullname'      =>$request->fname . " " .$request->mname . " " . $request->lname,
            'firstname'     =>$request->fname,
            'middlename'    =>$request->mname,
            'lastname'      =>$request->lname,
            // 'username'      =>$request-
            'password'      =>$request->pw,     
            'age'           =>$request->age,
            'Gender'        =>$request->gender,
            'Birthdate'     =>$request->dob,
            'Birthplace'    =>$request->bp,
            'Contact'       =>$request->contact,
            'Email'         =>$request->email,
            'Address'       =>$request->address,
            'created_at'    =>now(),
            'key'           =>$b,
            // 'user_id' => $year.$userID,
        ]);

      
        Stud::create([
            'name' => $request->fname . " " .$request->mname . " " . $request->lname,
            'email' => $request->email,
            'password' => bcrypt($request->username.$request->lname),
            'username' => $request->username,
            'role'  => 'student',
            'key'   => $b,
            'user_id' => $userID,
            
            
        ]);
        User::create([
            'name' => $request->fname . " " .$request->mname . " " . $request->lname,
            'email' => $request->email,
            'password' => bcrypt($request->username.$request->lname),
            'username' => $request->username,
            'role'  => 'student',
            'key'   => $b,
            'user_id' => $userID,
            
            
        ]);
        return redirect()->route('student.show')->with('success', 'Your account has been successfully created.');

    }

        
}
