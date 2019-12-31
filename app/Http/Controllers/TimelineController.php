<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index(){
        //return __METHOD__;

        //الطريقة الأولى
//        return view('timeline.index',[
////            'name'=> '<h1>Mohammed </h1>',
//            'name'=> 'Mohammed',
//            'title'=> "Web Developer",
//            'entries'=>['php','Laravel','css','js','html']
//        ]);

        //الطريقة الثانية
//        return view('timeline.index')-with([
//                'name'=> 'Mohammed',
//                'title'=> "Web Developer",
//                'entries'=>['php','Laravel','css','js','html']
//            ]);

        //الطريقة الثالثة
        $name='mohammed';
        $title='Web Developer';
        $entries=['php','Laravel','css','js','html'];

        return view('timeline.index',compact('name','title','entries'));

    }

    }


