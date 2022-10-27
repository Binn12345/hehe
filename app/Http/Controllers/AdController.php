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




// use App\userLogs;
// namespace App\Http\Controllers;
// use App\Helpers\Helper;
// use App\Students;
// use App\User;
// use App\Stud;
// use App\announcement;
// use App\Exports\StudentExport;
// use App\Imports\StudentImport;
// use Excel;
// use PDF;     
// use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;
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


        $categories = Stud::count();
        $cat        = userlogs::count();



        // $log        = userlogs::count();
        return view('home', compact('categories','cat'))->with('successs', 'Welcome.');
    }




    public function announce(Request $request)
     {
         $c_code = rand();
         $def = "";
         $def = $c_code;


            $image = array();
            if($files = $request->file('image'))
            {
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
            }

         announcement::CREATE([
             
             'title'             =>$request->title,
             'content'           =>$request->content,
             'actor'             =>$request->user()->name,
             'code_content'      =>$def,
             'created_at'        =>now(),
             'actRole'           =>$request->user()->role,
             'image'             =>implode('|', $image),
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
        ->select('admin.id','admin.user_id','data.Fullname','gender','role')
        ->join('data','admin.key','data.key')
        ->where('role', '=', 'admin')
        ->get();

        return view('student.adminData', compact('admins','admins'));
        // return view('home', compact('students','students'));
    }  

    public function showAnnouncement()
    {
        $announcements = announcement::all();
        return view('student.admin-announcement', compact('announcement','announcements'));
    }
    // public function showAdminPosted()
    // {
    //     $announcements = announcement::all();
    //     return view('admin.announce', compact('announcements','announcements'));
    // }
    public function showStudent()
    {
        // $students = Students::all();    
        $students = DB::table('student')
        ->select('student.id','student.user_id','name','gender','role','age')
        ->join('data','student.key','data.key')
        ->where('role', '=', 'student')
        ->get();

        return view('dtable', compact('students','students'));
        // return view('home', compact('students','students'));
    } 
    public function updatee(Request $request, Students $student)
    {

        $student->update([

            'Fullname'      =>$request->fname,
            'Gender'        =>$request->gender,
            'Birthdate'     =>$request->dob,
            'Birthplace'    =>$request->bp,
            'Contact'       =>$request->contact,
            // 'Email'         =>$request->email,
            'Address'       =>$request->address,
            'created_at'    =>now(),
        ]);

        // $user->update([

        //     'name'          =>$request->fname,
        //     'email'         =>$request->email,
        //     // 'Birthdate'     =>$request->dob,
        //     // 'Birthplace'    =>$request->bp,
        //     // 'Contact'       =>$request->contact,
        //     // 'Email'         =>$request->email,
        //     // 'Address'       =>$request->address,
        //     'created_at'    =>now(),
        // ]);
        

        $state= "Successfully Data Updated.";
        userlogs::create([

            'actor'             =>$request->user()->name,
            'state'             =>$state,
            'role'              =>$request->user()->role,
            'created_at'        =>now(),
            
        ]); 
        
        return redirect()->route('dataResource')->with('successs', 'Data has been Updated');
    }

    public function getDataPDF()
    {
        // $students = Students::all();
        $students = DB::table('student')
        ->select('student.id','student.user_id','Fullname','gender','Address','Contact','Birthdate','student.email')
        ->join('data','student.key','data.key')
        ->where('role', '=', 'student')
        ->get();
        // dd($students);
        $pdf = PDF::loadView('index3', compact('students'))->setOptions(['defaultFont' => 'sans-serif'])->setPaper('a4', 'landscape');;
        return $pdf->download('student-data.pdf');
    }

    public function edit(Students $student)
    {
        return view('student.edit')->with('student',$student);
    }
     
    public function editStudent(Student $student)
    {
        return view('student.editAdmin')->with('student',$student);
    }

    public function studStore(Request $request)
    {
        $x = rand();
        $b = "";
        $b = $x;
        $year = date("Y").'A';
        $userID = Helper::IDGenerator(new Stud, 'user_id', 5, $year);
        
        
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

       User::create([
            'name' => $request->fname . " " .$request->mname . " " . $request->lname,
            'email' => $request->email,
            'password' => bcrypt($request->username.$request->lname),
            'username' => $request->username,
            'role'  => 'student',
            'key'   => $b,
            // 'user_id' => $userID,
            
            
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
        return redirect()->route('student.sTable')->with('successs', 'Your account has been successfully created.');
    }




    // admin announcement edit && delete
    public function destroyAnnouncement(announcement $announcement)
    {

        $announcement->delete();
        return redirect()->back()->with('successs', 'Data has been deleted');
    }
    public function editAnnouncement(announcement $announcement)
    {
        return view('student.editAnnounce')->with('announcement',$announcement);
    }
    public function updateAnnouncement(announcement $announcement)
    {
        return view('student.editAnnounce')->with('announcement',$announcement);
    }
    
}
