<?php

namespace App\Http\Controllers;
use App\Helpers\Helper;
use App\Students;
use App\User;
use App\Admin;
use App\Stud;
use App\userlogs;
use App\announcement;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Excel;
use PDF;     
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ModsController extends Controller
{   

    // public function showData()
    // {
    //     // $students = Students::all();    
    //     $students = DB::table('users')
    //     ->select('users.id','users.user_id','name','gender','role')
    //     ->join('data','users.key','data.key')
    //     ->where('role', '=', 'student')
    //     ->get();

    //     return view('dtable', compact('students','students'));
    //     // return view('home', compact('students','students'));
    // }

    public function stdProfile()
    {
        return view('std3.stdProfile');
    }
    //MOD Only For Announcements
    public function announceByAdm()
    {
        return view('std3.stdAnnouncement');
    }

    //MOD for student home or dashboard
    public function index(Request $request)
    {
        $state= "You are now logged in";
        userlogs::create([

            'actor'             =>$request->user()->name,
            'state'             =>$state,
            'role'              =>$request->user()->role,
            'created_at'        =>now(),
            
        ]);  


        $students = DB::table('userlogs')
        ->select('actor','state','role','created_at')
        ->get();

        

        return view('std3.stdBody', compact('students','students'));
    }
    // MOD ONLY FOR STUDENT
    public function store(Request $request)
    {
        $x = rand();
        $b = "";
        $b = $x;
        $year = date("Y").'A';
        $userIDd = Helper::IDGenerator(new Stud, 'user_id', 5, $year);
        
        
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
            'user_id' => $userIDd,
            
            
        ]);
        User::create([
            'name' => $request->fname . " " .$request->mname . " " . $request->lname,
            'email' => $request->email,
            'password' => bcrypt($request->username.$request->lname),
            'username' => $request->username,
            'role'  => 'student',
            'key'   => $b,
            // 'user_id' => $userID,
            
            
        ]);
        return redirect()->route('home')->with('success', 'Your account has been successfully created.');

    }




    public function updateProfile(Request $request, User $user)
    {
        $image = array();
        
        if($request->hasFile('images')){
            $files = $request->file('images');
            

            foreach($files as $file)
            {
                $image_name = md5($file->getClientOriginalName().rand(1,1000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'public/multiple_image/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;
            }
            
            $user->update([
                'image'     =>implode('|', $image),
            ]);
            
        }
        $user->update([
            'name'         =>$request->title,
            'email'       =>$request->content,
            'created_at'    =>now(),
        ]);

            
        return redirect()->route('student')->with('successs', 'hahaha');    
    }


    public function modules()
    {
        return view('std3.modules.access')->with('successs','access success');  
    }     
    
        
}
