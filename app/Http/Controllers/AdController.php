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


        $categories = studentModel::count();
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
        // $user = User::select('id')->where->("id",)->get();
        // dd($user);
        // dd($user[6]->id);
         $x = rand();
         $c = "";
         $c = $x;
         $year = date("Y").'M';
         $userID = Helper::IDGenerator(new Admin, 'user_id', 5, $year);
        //  Students::create([
 
        //      'Fullname'      =>$request->firstname . " " .$request->middlename . " " . $request->lastname,
        //      'firstname'     =>$request->firstname,
        //      'middlename'    =>$request->middlename,
        //      'lastname'      =>$request->lastname,
        //      // 'username'      =>$request-
        //      'password'      =>$request->password,
        //      'age'           =>$request->age,
        //      'Gender'        =>$request->gen,
        //      'Birthdate'     =>$request->dobb,
        //      'Birthplace'    =>$request->bip,
        //      'Contact'       =>$request->cont,
        //      'Email'         =>$request->emaild,
        //      'Address'       =>$request->add,
        //      'key'           =>$c,
        //      'created_at'    =>now(),

             
        //  ]);
 
 
    
         
    


   
        User::create([
            'name'          =>$request->firstname . " " .$request->middlename . " " . $request->lastname,
            'email'         =>$request->emaild,
            'password'      =>bcrypt($request->pw),
            // 'username' => $request->username,
            'firstname'     =>$request->firstname,
            'middlename'    =>$request->middlename,
            'lastname'      =>$request->lastname,
            'age'           =>$request->age,
            'gender'        =>$request->gen,
            'birthdate'     =>$request->dobb,
            'birthplace'    =>$request->bip,
            'contact'       =>$request->cont,
            'email'         =>$request->emaild,
            'address'       =>$request->add,
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
        ->select('admin.id','admin.user_id','users.name','gender','users.role','admin.key')
        ->join('users','admin.key','users.key')
        ->where('users.role', '=', 'admin')
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
        $students = DB::table('users')
        ->select('users.id','student.student_no','users.name','gender','age','student.role')
        ->join('student','users.key','student.key')
        ->where('users.role', '=', 'student')
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
        $students = DB::table('users')
        ->select('users.id','student.student_no','users.name','gender','address','contact','users.birthdate','users.email','users.birthplace','users.username','users.lastname')
        ->join('student','student.key','users.key')
        ->where('users.role', '=', 'student')
        ->get();
        // dd($students);
        $pdf = PDF::loadView('index3', compact('students'))->setOptions(['defaultFont' => 'sans-serif'])->setPaper('a4', 'landscape');;
        return $pdf->download('student-data.pdf');
    }

    public function edit(User $student)
    {
       
        return view('student.edit')->with('student',$student);
    }
     //admin ata
    public function editStudent(Students $student)
    {
        return view('student.editAdmin')->with('student',$student);
    }







    public function studStore(Request $request)
    {
        $x = rand();
        $b = "";
        $b = $x;
        $year = date("Y").'A';
        $userID = Helper::IDGenerator(new studentModel, 'student_no', 5, $year);
        
        
        // Students::create([

        //     'Fullname'      =>$request->fname . " " .$request->mname . " " . $request->lname,
        //     'firstname'     =>$request->fname,
        //     'middlename'    =>$request->mname,
        //     'lastname'      =>$request->lname,
        //     // 'username'      =>$request-
        //     'password'      =>$request->pw,     
        //     'age'           =>$request->age,
        //     'Gender'        =>$request->gender,
        //     'Birthdate'     =>$request->dob,
        //     'Birthplace'    =>$request->bp,
        //     'Contact'       =>$request->contact,
        //     'Email'         =>$request->email,
        //     'Address'       =>$request->address,
        //     'created_at'    =>now(),
        //     'key'           =>$b,
        //     // 'user_id' => $year.$userID,
        // ]);

       User::create([
            'name' => $request->fname . " " .$request->mname . " " . $request->lname,
            'email' => $request->email,
            'password' => bcrypt($request->username.$request->lname),
            'username' => $request->username,
            'firstname'     =>$request->fname,
            'middlename'    =>$request->mname,
            'lastname'      =>$request->lname,
            'age'           =>$request->age,
            'gender'        =>$request->gender,
            'birthdate'     =>$request->dob,
            'birthplace'    =>$request->bp,
            'contact'       =>$request->contact,
            'email'         =>$request->email,
            'address'       =>$request->address,
            'role'          =>'student',
            'key'           => $b,
            'created_at'    =>now(),
            // 'user_id' => $userID,
            
            
        ]);
        studentModel::create([
            'key'          =>$b,
            'role'         =>'student',
            'student_no'      => $userID,
            'created_at'    =>now(),    
            
            
        ]);
        return redirect()->route('student.sTable')->with('successs', 'Student account has been successfully added.');
    }





  //student Panel




        // ACCOUNT ADMIN EDIT DELETE    
           public function destroy(Admin $admin)
            {
            
                $adminn     = $admin->key;
                $user       = User::where('key', $adminn)->first();
                
                $user           ->delete();
                $admin          ->delete();
                return back()->with('successs', 'Data has been deleted');
            }

            public function EditAdminAccount(Admin $admin)
            {
                return view('student.editAnnounce')->with('admin',$admin);
            }


            //UPDATE ADMIN ACCOUNT
            public function UpdateAdminAccount(Request $request, Admin $admin)
            {
                $admin->update([

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
                // return view('student.editAnnounce')->with('admin',$admin);
            }






            public function import(Request $request)
            {
                Excel::import(new StudentImport, $request->file);
                return redirect()->route('student.sTable')->with('successs', 'Data has been Updated');;
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



    public function updateAnnouncement(Request $request, announcement $announcement)
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
            
            $announcement->update([
                'image'     =>implode('|', $image),
            ]);

        }
        
        $announcement->update([
            'title'         =>$request->title,
            'content'       =>$request->content,
            'created_at'    =>now(),
        ]);

            
        return redirect()->route('admin.announce')->with('successs', 'hahaha');
    }



    // ADMIN CONTROL STUDENT EDIT VIEW DELETE PANEL
    public function destroyStudent(studentModel $student)
    {
        $studentt     = $student->key;
        $users       = User::where('key', $studentt)->first();
        
        $users            ->delete();
        $student         ->delete();
        
        return back()->with('successs', 'Data has been deleted');
    }

    
}
