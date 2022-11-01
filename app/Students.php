<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;

class Students extends Model
{ 
    protected $table = 'student';
    
    protected $fillable = ["Fullname","Gender","Birthdate","Birthplace","Contact","Email","Address", "firstname", "middlename", "lastname","username","age","password","key","user_id",];

    // public static function getStudents()
    // {
    //     // $students = DB::table('student')
    //     // ->select("id","username","gender","birthdate","contact","email","address")
    //     // ->orderBy('id','asc')
    //     // ->get()
    //     // ->toArray();

    //     $students = DB::table('student')
    //     ->select('student.user_id','data.Fullname','data.Gender','data.Address','data.age')
    //     ->join('data','data.key','student.key')
    //     ->where('student.role', '=', 'student')
    //     ->orderBy('student.id','asc')
    //     ->get();
        

    //     return $students;
    // }


    //  public static function getStudentExcel()
    //  {

        
    //     $students = DB::table('data')
    //     ->select('Fullname','gender','age')
    //     ->orderBy('id','asc')
    //     ->get()
    //     ->toArray(); 


    //  }
}
