<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
class testHelperController extends Controller
{
    //
    function index()
    {
        Helper::test();
    }
}
