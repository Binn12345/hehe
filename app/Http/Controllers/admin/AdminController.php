<?php

namespace App\Http\Controllers;
use App\Helpers\Helper;
use App\Students;
use App\User;
use App\Admin;
use App\announcement;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Excel;
use PDF;     
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     //CREATE admin Announcement
     public function announce(Request $request)
     {
         $c_code = rand();
         $def = "";
         $def = $c_code;
 
         announcement::create([
 
             'title'             =>$request->title,
             'content'           =>$request->content,
             'actor'             =>$request->user()->name,
             'code_content'      =>$def,
             'created_at'        =>now(),
             'actRole'           =>$request->user()->role,
         ]);
         return redirect()->route('admin.announce')->with('successs', 'Annoucement are successfully posted.');
     }
 
 
 
 
     //CREATE data for admin
     public function adminStore(Request $request)
     {
         $x = rand();
         $c = "";
         $c = $x;
         $year = date("Y").'M';
         $userID = Helper::IDGenerator(new Admin, 'user_id', 5, $year);
         Students::create([
 
             'Fullname'      =>$request->firstname . " " .$request->middlename . " " . $request->lastname,
             'firstname'     =>$request->firstname,
             'middlename'    =>$request->middlename,
             'lastname'      =>$request->lastname,
            //  'username'      =>$request->username,
             'password'      =>$request->password,
             'age'           =>$request->age,
             'Gender'        =>$request->gen,
             'Birthdate'     =>$request->dobb,
             'Birthplace'    =>$request->bip,
             'Contact'       =>$request->cont,
             'Email'         =>$request->emaild,
             'Address'       =>$request->add,
             'key'           =>$c,
             'created_at'    =>now(),
         ]);
 
 
        
         
         Admin::create([
             'name' => $request->firstname . " " .$request->middlename . " " . $request->lastname,
             'email' => $request->emaild,
             'password' => bcrypt($request->pw),
             'username' => $request->username,
             'role'  => $request->role,
             'key'   => $c,
             'user_id' => $userID,
             
         ]);
         return redirect()->route('dataResource')->with('successs', 'account has been successfully added.');
     }
 
 

}
