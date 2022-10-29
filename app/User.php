<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $table = 'users';
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','role','key','user_id','image','firstname','lastname','middlename','age','birthplace','gender','contact','address','birthdate',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
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
