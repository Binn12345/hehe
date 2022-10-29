<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
class Stud extends Model
{
    use Notifiable;

    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password','username','role','key','user_id','image','firstname','lastname','middlename','age',
    ];


    // public static function getStudents()
    // {
    //     // $students = DB::table('student')
    //     // ->select("id","username","gender","birthdate","contact","email","address")
    //     // ->orderBy('id','asc')
    //     // ->get()
    //     // ->toArray();

    //     $students = DB::table('users')
    //     ->select('users.user_id','data.Fullname','data.Gender','data.Address','data.age')
    //     ->join('student','users.key','student.key')
    //     ->where('student.role', '=', 'student')
    //     ->orderBy('student.id','asc')
    //     ->get();
        

    //     return $students;
    // }





}
