<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{

    public function index() {

        return view('lesson.index');
    }


    
    public function post(Request $request) {
        return view('lesson.index', ['msg'=>$request->msg], ['id'=>$request->id]);
    }
    

   }