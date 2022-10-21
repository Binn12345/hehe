<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
class Stud extends Model
{
    use Notifiable;

    protected $table = 'student';
    protected $fillable = [
        'name', 'email', 'password','username','role','key','user_id',
    ];
}
