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
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdController extends Controller
{

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
     
    public function adminStore(Request $request)
     {
         $x = rand();
         $c = "";
         $c = $x;
         $year = date("Y").'M';
         $userID = Helper::IDGenerator(new User, 'user_id', 5, $year);
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
 
 
        
         
         User::create([
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
}
