<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{ 
    protected $table = 'data';
    protected $fillable = [
        'Fullname','Gender','Birthdate','Birthplace','Contact','Email','Address'
    ];
}
