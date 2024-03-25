<?php

namespace App\Http\Controllers\Teacher;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TeacherAllCaseStudyController extends Controller
{
    public function show()
    {
        return view('tcase-studies');
    }
}