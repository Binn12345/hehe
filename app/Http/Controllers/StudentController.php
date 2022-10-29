<?php
use App\userlogs;
namespace App\Http\Controllers;
use App\Helpers\Helper;
use App\Students;
use App\User;
use App\studentModel;
use App\Stud;
use App\announcement;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Excel;
use PDF;     
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function main(){
        return 'hehe';
    }
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
    // public function logs()
    // {
        
    // }

    public function graph()
    {
       
    $data = DB::table('user')
      ->select(
       DB::raw('gender as gender'),
       DB::raw('count(*) as number'))
      ->groupBy('gender')
      ->get();
    $array[] = ['Gender', 'Number'];
    foreach($data as $key => $value)
    {
     $array[++$key] = [$value->gender, $value->number];
    }
    return view('index2')->with('gender', json_encode($array));

    }
    public function studentAccess()
    {

        return view('student2.index');

    }
    
    
        // public function showAnnouncement()
        // {
        //     return view('student.admin-announcement');
        // }
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
        // $students = Students::all();
        $students = DB::table('admin')
        ->select('admin.id','admin.user_id','name','gender','role')
        ->join('data','admin.key','data.key')
        ->where('role', '=', 'admin')
        ->get();
        $pdf = PDF::loadView('index3', compact('students'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('student-data.pdf');
    }
    public function getAllStudent()
    {
        $students = Students::all();
        return view('index2', compact('students','students'));
    }
    public function show(){
        // $students = Students::all();
        return view('/welcome');
    }   
    // public function showData()
    // {
    //     $students = Students::all();
    //     return view('dTable', compact('students','students'));
    // }
    
    public function receive()
    {
        return view('stdReceive');
    }
    public function create()
    {
        return view('create');
    }

        // public function destroy(Students $student)
        // {

        //     $student->delete();
        //     // $student->delete('DELETE users,data
        //     // FROM users
        //     // INNER JOIN data
        //     // ON
        //     // users.KEY = data.KEY
        //     // WHERE 
        //     // users.key = ? AND data.key = ?');

        //     // $students = DB::table('users','data')
        //     // ->select('users.id','users.user_id','name','gender','role')
        //     // ->join('data','users.key','data.key')
        //     // ->where('role', '=', 'student')
        //     // ->get();
        //     return redirect()->back()->with('successs', 'Data has been deleted');
        // }
    
    public function edit(Students $student)
    {
        return view('edit')->with('student',$student);
    }
    // public function update(Request $request, Students $student)
    // {
    //     $student->update([

    //         'Fullname'      =>$request->fname,
    //         'Gender'        =>$request->gender,
    //         'Birthdate'     =>$request->dob,
    //         'Birthplace'    =>$request->bp,
    //         'Contact'       =>$request->contact,
    //         'Email'         =>$request->email,
    //         'Address'       =>$request->address,
    //         'created_at'    =>now(),
    //     ]);

    //     return redirect()->back()->with('successs', 'Data has been Updated');
    // }

    //CREATE DATA for student
    public function store(Request $request)
    {
        $x = rand();
        $b = "";
        $b = $x;
        $year = date("Y").'A';
        $userID = Helper::IDGenerator(new studentModel, 'user_id', 5, $year);
        


       User::create([
            'name'          =>$request->fname . " " .$request->mname . " " . $request->lname,
            'email'         =>$request->email,
            'password'      =>bcrypt($request->username.$request->lname),
            'username'      =>$request->username,
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
            'created_at'    =>now(),
            'role'          =>'student',
            'key'           =>$b,
            // 'user_id' => $userID,
            
            
        ]);
        studentModel::create([
            'key'          =>$b,
            'role'         =>'student',
            'user_id'      => $userID,
            'created_at'    =>now(),    
            
            
        ]);
        return redirect()->route('bug')->with('success', 'Your account has been successfully created.');
    }
    //CREATE admin Announcement
    // public function announce(Request $request)
    // {
    //     $c_code = rand();
    //     $def = "";
    //     $def = $c_code;

    //     announcement::create([

    //         'title'             =>$request->title,
    //         'content'           =>$request->content,
    //         'actor'             =>$request->user()->name,
    //         'code_content'      =>$def,
    //         'created_at'        =>now(),
    //         'actRole'           =>$request->user()->role,
    //     ]);
    //     return redirect()->route('admin.announce')->with('successs', 'Annoucement are successfully posted.');
    // }




    // //CREATE data for admin
    // public function adminStore(Request $request)
    // {
    //     $x = rand();
    //     $c = "";
    //     $c = $x;
    //     // $year = date("Y").'M';
    //     // $userID = Helper::IDGenerator(new User, 'user_id', 5, $year);
    //     Students::create([

    //         'Fullname'      =>$request->firstname . " " .$request->middlename . " " . $request->lastname,
    //         'firstname'     =>$request->firstname,
    //         'middlename'    =>$request->middlename,
    //         'lastname'      =>$request->lastname,
    //         // 'username'      =>$request-
    //         'password'      =>$request->password,
    //         'age'           =>$request->age,
    //         'Gender'        =>$request->gen,
    //         'Birthdate'     =>$request->dobb,
    //         'Birthplace'    =>$request->bip,
    //         'Contact'       =>$request->cont,
    //         'Email'         =>$request->emaild,
    //         'Address'       =>$request->add,
    //         'key'           =>$c,
    //         'created_at'    =>now(),
    //     ]);


       
        
    //     User::create([
    //         'name' => $request->firstname . " " .$request->middlename . " " . $request->lastname,
    //         'email' => $request->emaild,
    //         'password' => bcrypt($request->pw),
    //         'username' => $request->username,
    //         'role'  => $request->role,
    //         'key'   => $c,
    //         // 'user_id' => $userID,
            
    //     ]);
    //     return redirect()->route('dataResource')->with('successs', 'account has been successfully added.');
    // }
        


    //logs
    
    public function indexMod(Request $request)
    {

        $state= "You are now logged in";
        userlogs::create([

            'actor'             =>$request->user()->name,
            'state'             =>$state,
            'role'              =>$request->user()->role,
            'created_at'        =>now(),
            
        ]);  
        return view('home2');
    }
    public function logs()
    {

        $students = DB::table('userlogs')
        ->select('actor','state','role','created_at')
        ->get();

        return view('student.logs', compact('students','students'));
        
    }
    //showStudentdata
    // public function showData()
    // {
    //     // $students = Students::all();    
    //     $students = DB::table('student')
    //     ->select('student.id','student.user_id','users.name','gender','age','student.role')
    //     ->join('users','student.key','users.key')
    //     ->where('users.role', '=', 'student')
    //     ->get();

    //     return view('dtable', compact('students','students'));
    //     // return view('home', compact('students','students'));
    // }


}
