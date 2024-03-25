<?php

namespace App\Http\Controllers\Student;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StudentAllcasestudyController extends Controller
{
    public function show()
    {
       
    return view('s-allcasestudy');
    }
}