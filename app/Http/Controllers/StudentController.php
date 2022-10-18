<?php

namespace App\Http\Controllers;
use App\Helpers\Helper;
use App\Students;
use App\User;
use App\announcement;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Excel;
use PDF;     

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // public function index2()
    // {
    //     $students = Students::all();
    //     return redirect()->with('students',$students);
    // }
    //Export to EXCEL
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function studentAccess()
    {

        return view('student2.index');

    }
    public function showData()
    {
        $students = Students::all();    
        return view('dtable', compact('students','students'));
        // return view('home', compact('students','students'));
    }
    
    public function showAnnouncement()
    {
        return view('student.admin-announcement');
    }
    public function adminData(){
        return view('student.adminData');
    }
    public function exportToExcel()
    {   
        return Excel::download(new StudentExport,'Students.xlsx');
    }
    //Import to EXCEL
    public function import(Request $request)
    {
        Excel::import(new StudentImport, $request->file);
        return redirect('/');
    }
    //Export to CSV
    public function exportToCsv()
    {
        return Excel::download(new StudentExport,'Students.csv');
    }
    //export To PDF
    public function getDataPDF()
    {
        $students = Students::all();
        $pdf = PDF::loadView('index3', compact('students'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('student-data.pdf');
    }
    public function getAllStudent()
    {
        $students = Students::all();
        return view('index2', compact('students','students'));
    }
    public function show(){
        $students = Students::all();
        return view('index2', compact('students','students'));
    }
    // public function showData()
    // {
    //     $students = Students::all();
    //     return view('dTable', compact('students','students'));
    // }
    public function logs()
    {
        return view('student.logs');
    }
    public function receive()
    {
        return view('stdReceive');
    }
    // public function create()
    // {
    //     return view('create');
    // }

    public function destroy(Students $student)
    {
        $student->delete();
        return redirect()->back()->with('successs', 'Data has been deleted');
    }
    
    public function edit(Students $student)
    {
        return view('edit')->with('student',$student);
    }
    public function update(Request $request, Students $student)
    {
        $student->update([

            'Fullname'      =>$request->fname,
            'Gender'        =>$request->gender,
            'Birthdate'     =>$request->dob,
            'Birthplace'    =>$request->bp,
            'Contact'       =>$request->contact,
            'Email'         =>$request->email,
            'Address'       =>$request->address,
            'created_at'    =>now(),
        ]);

        return redirect()->back()->with('successs', 'Data has been Updated');
    }

    //CREATE DATA for student
    public function store(Request $request)
    {
        $x = rand();
        $b = "";
        $b = $x;
        $userID = Helper::IDGenerator(new User, 'user_id',5,'STD');
        $year = date("Y");

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
        ]);

        User::create([
            'name' => $request->fname . " " .$request->mname . " " . $request->lname,
            'email' => $request->email,
            'password' => bcrypt($request->username.$request->lname),
            'username' => $request->username,
            'role'  => 'student',
            'key'   => $b,
            'user_id' => $year.$userID,
            
            
        ]);
        return redirect()->route('student.show')->with('success', 'Your account has been successfully created.');
    }
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
        $b = "";
        $b = $x;
        // $userID = Helper::IDGenerator(new User, 'user_id',5,'ADM');

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
            'key'           =>$b,
            'created_at'    =>now(),
        ]);


       
        
        User::create([
            'name' => $request->firstname . " " .$request->middlename . " " . $request->lastname,
            'email' => $request->emaild,
            'password' => bcrypt($request->pw),
            'username' => $request->username,
            'role'  => $request->role,
            'key'   => $b,
            
        ]);
        return redirect()->route('dataResource')->with('successs', 'account has been successfully added.');
    }


}
