<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index(){
        //return __METHOD__;
        return view('timeline.index',[
            'name'=> '<h1>Mohammed </h1>',
            'title'=> "Web Developer",
            'entries'=>['php','Laravel','css','js','html']
        ]);
    }
}
