<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends controller
{
        public function show()
        {
         $data = Feedback::all();
         
         return view('feedback',['data'=>$data]);
           
        }
    //     function show(){

    //    $data = Feedback::all();
    //     $title = "student Feedback";
    //     return view('feedback',compact('data','title'));
    //     }

    //     function show(){
    //     $data = Form::all();
        
    //     return view('feedback',compact('data'));
    // }

}