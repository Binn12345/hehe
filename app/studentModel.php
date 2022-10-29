<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    
    protected $table = 'student';
    protected $fillable = [
        'user_id','key','role',
    ];



}
