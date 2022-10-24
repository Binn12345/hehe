<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Students extends Model
{ 
    protected $table = 'data';
    protected $fillable = ["Fullname","Gender","Birthdate","Birthplace","Contact","Email","Address", "firstname", "middlename", "lastname","username","age","password","key","user_id",];

    public static function getStudents()
    {
        // $students = DB::table('student')
        // ->select("id","username","gender","birthdate","contact","email","address")
        // ->orderBy('id','asc')
        // ->get()
        // ->toArray();

        $students = DB::table('student')
        ->select('student.id','student.user_id','name','gender','role')
        ->join('data','student.key','data.key')
        ->where('role', '=', 'student')
        ->orderBy('id','asc')
        ->get()
        ->toArray();    
    }
}
