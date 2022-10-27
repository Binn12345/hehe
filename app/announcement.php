<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class announcement extends Model
{
    
    protected $table = 'announcement';

    
    protected $fillable = ["title","content","actor","code_content","actRole","image"];


    

}
