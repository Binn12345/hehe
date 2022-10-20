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
        $students = DB::table('data')
        ->select("id","fullname","gender","birthdate","contact","email","address")
        ->orderBy('id','asc')
        ->get()
        ->toArray();
    }
}
