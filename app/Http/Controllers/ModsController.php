<?php

namespace App\Http\Controllers;
use App\Helpers\Helper;
use App\Students;
use App\studentModel;
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

    public function stdProfile(Request $request)
    {
        $state= "View Profile";
        userlogs::create([

            'actor'             =>$request->user()->name,
            'state'             =>$state,
            'role'              =>$request->user()->role,
            'created_at'        =>now(),
            
        ]); 
        return view('std3.stdProfile');
    }
    //MOD Only For Announcements
    public function announceByAdm(Request $request)
    {
        $state= "check announcement";
        userlogs::create([

            'actor'             =>$request->user()->name,
            'state'             =>$state,
            'role'              =>$request->user()->role,
            'created_at'        =>now(),
            
        ]); 
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


    public function updateProfilePic(Request $request, $id){
        $user = User::find($id);
        $userid = $user->key;
        // dd($userid);

        $myImage = $request->all()['imagea'][0];
        // dd($myImage);

        if($request->hasFile('imagea')){
            $imagename = 'profile-'. time()  . '.' . $myImage->guessClientExtension();
            $myImage->move(public_path('images/'), $imagename);
            $user->image    = $imagename;
        }else{
            return back()->withStatus('Please input image.');
        }
        $user->update(); 
        


        $state= "Successfully Update Profile";
        userlogs::create([

            'actor'             =>$request->user()->name,
            'state'             =>$state,
            'role'              =>$request->user()->role,
            'created_at'        =>now(),
            
        ]);  


        DB::table('userlogs')
        ->select('actor','state','role','created_at')
        ->get();




        return redirect()->route('stdProfile')->with('successs','Your profile now is updated');      
        
    }


    
    public function modules()
    {
        return view('std3.modules.access')->with('successs','access success');  
    }     
    
    // Student Newsfeed
    public function newsfeed()
    {
        return view('std3.web.indexx');
    }

    // Fair Waarning
    public function fairWarning(Request $request)
    {
        $state= "View Fair Warning";
        userlogs::create([

            'actor'             =>$request->user()->name,
            'state'             =>$state,
            'role'              =>$request->user()->role,
            'created_at'        =>now(),
            
        ]); 
        return view('std3.warning.fair');
    }
    
        
}
