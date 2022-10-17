<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class userlogs extends Model
{
    protected $table = 'userlogs';
    protected $fillable = ["actor","state","role","ip_address","device"];   
}
