<?php


namespace App\Http\Controllers;
use App\Helpers\Helper;
use App\Students;
use App\User;
use App\Admin;
use App\userlogs;
use App\announcement;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Excel;
use PDF;     
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function StdAcct()
    {   
        // $state= "Successfully created account for student";
        // userlogs::create([

        //     'actor'             =>$request->user()->name,
        //     'state'             =>$state,
        //     'role'              =>$request->user()->role,
        //     'created_at'        =>now(),
            
        // ]); 
        return view('student.regAsStudent');
    }
    public function index(Request $request)
    {

        $state= "You are now logged in";
        userlogs::create([

            'actor'             =>$request->user()->name,
            'state'             =>$state,
            'role'              =>$request->user()->role,
            'created_at'        =>now(),
            
        ]);  
        return view('home')->with('successs', 'Welcome.');
    }




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

         $state= "Announcement is successfully created";
        userlogs::create([

            'actor'             =>$request->user()->name,
            'state'             =>$state,
            'role'              =>$request->user()->role,
            'created_at'        =>now(),
            
        ]);  
         return redirect()->route('admin.announce')->with('successs', 'Annoucement is successfully posted.');
     }
     
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
             // 'username'      =>$request-
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
       
    


   
        User::create([
            'name' => $request->firstname . " " .$request->middlename . " " . $request->lastname,
            'email' => $request->emaild,
            'password' => bcrypt($request->pw),
            'username' => $request->username,
            'role'  => $request->role,
            'key'   => $c,
            // 'user_id' => $userID,
            
        ]);



        $state= "ADMIN ACCOUNT is successfully created!";
        userlogs::create([

            'actor'             =>$request->user()->name,
            'state'             =>$state,
            'role'              =>$request->user()->role,
            'created_at'        =>now(),
            
        ]); 

        return redirect()->route('dataResource')->with('successs', 'account has been successfully added.');
        }




     public function showAdmin()
     {
        // $students = Students::all();    
        $admins = DB::table('admin')
        ->select('admin.id','admin.user_id','name','gender','role')
        ->join('data','admin.key','data.key')
        ->where('role', '=', 'admin')
        ->get();

        return view('student.adminData', compact('admins','admins'));
        // return view('home', compact('students','students'));
    }  
    public function showStudent()
    {
        // $students = Students::all();    
        $students = DB::table('student')
        ->select('student.id','student.user_id','name','gender','role')
        ->join('data','student.key','data.key')
        ->where('role', '=', 'student')
        ->get();

        return view('dtable', compact('students','students'));
        // return view('home', compact('students','students'));
    } 


    public function getDataPDF()
    {
        // $students = Students::all();
        $students = DB::table('student')
        ->select('student.id','student.user_id','Fullname','gender','Address','Contact','Birthdate','student.email')
        ->join('data','student.key','data.key')
        ->where('role', '=', 'student')
        ->get();
        $pdf = PDF::loadView('index3', compact('students'))->setOptions(['defaultFont' => 'sans-serif'])->setPaper('a4', 'landscape');;
        return $pdf->download('student-data.pdf');
    }

    public function edit(Students $student)
    {
        return view('edit')->with('student',$student);
    }
     



    
}
