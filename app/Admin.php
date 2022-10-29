<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
class Admin extends Model
{
    use Notifiable;

    protected $table = 'admin';
    
  
    protected $fillable = [
        'user_id','key','role',
    ];


    

}