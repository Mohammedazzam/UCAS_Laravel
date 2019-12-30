<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index(){
        //return __METHOD__;
        return view('timeline.index');
    }
}
