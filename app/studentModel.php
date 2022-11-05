<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
class studentModel extends Model
{
    
    protected $table = 'student';
    protected $fillable = [
        'student_no','key','role','gender'
    ];



    // public static function getStudents()
    // {
    //     $students = DB::table('users')
    //         ->select('student.user_id','users.name','users.gender','users.address','users.age','users.birthdate','users.birthplace','users.contact','users.email')
    //         ->join('student','student.key','users.key')
    //         ->where('student.role', '=', 'student')
    //         ->orderBy('users.id','asc')
    //         ->get();
            
    
    //         return $students;
    // }
    public static function getExcelStudents()
    {
        $students = DB::table('users')
            ->select('student.student_no','users.name','users.gender','users.address','users.age','users.birthdate','users.birthplace','users.contact','users.username','users.email','users.firstname','users.middlename','users.lastname')
            ->join('student','student.key','users.key')
            ->where('student.role', '=', 'student')
            ->orderBy('users.id','asc')
            ->get();
            
    
            return $students;
    }


}
