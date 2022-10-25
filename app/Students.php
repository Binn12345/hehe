<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;

class Students extends Model
{ 
    protected $table = 'student';
    protected $table1 = 'data';
    protected $fillable = ["Fullname","Gender","Birthdate","Birthplace","Contact","Email","Address", "firstname", "middlename", "lastname","username","age","password","key","user_id",];

    public static function getStudents()
    {
        // $students = DB::table('student')
        // ->select("id","username","gender","birthdate","contact","email","address")
        // ->orderBy('id','asc')
        // ->get()
        // ->toArray();

        $students = DB::table('student')
        ->select('student.id','student.user_id','name','gender','role','Fullname')
        ->join('data','student.key','data.key')
        ->where('role', '=', 'student')
        ->orderBy('id','asc')
        ->get()
        ->toArray();    
    }


     public static function getStudentExcel()
     {

        
        $students = DB::table('data')
        ->select('Fullname','gender','age')
        ->orderBy('id','asc')
        ->get()
        ->toArray(); 


     }
}
