<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Students extends Model
{ 
    protected $table = 'data';
    protected $fillable = ["Fullname","Gender","Birthdate","Birthplace","Contact","Email","Address", "firstname", "middlename", "lastname","username","age","password","key","user_id",];

    // public static function getStudents()
    // {
    //     $records =DB::table("users")
    //     ->innerJoin("data", function($join){
    //         $join->on("users.key", "=", "data.key");
    //     })
    //     ->select("fullname")
    //     ->where("role", "=", student)
    //     ->get();
    //     return $records;    

    // }
}
