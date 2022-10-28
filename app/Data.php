<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data';

    protected $fillable = ["Fullname","Gender","Birthdate","Birthplace","Contact","Email","Address", "firstname", "middlename", "lastname","username","age","password","key","user_id",];

}
