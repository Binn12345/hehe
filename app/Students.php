<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Students extends Model
{ 
    protected $table = 'data';
    protected $fillable = ["Fullname","Gender","Birthdate","Birthplace","Contact","Email","Address", "firstname", "middlename", "lastname","username","age","password","key"];

    public static function getStudents()
    {
        $records = DB::table('data')->SELECT("id","Fullname","Gender","Birthdate","Birthplace","Contact","Email","Address")->OrderBy('id','asc')->get()->toArray();
        return $records;    

    }
}
