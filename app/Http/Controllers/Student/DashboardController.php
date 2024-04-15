<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function about()
    {
        return view('student.pages.about');
    }
    public function help()
    {
        return view('student.pages.help');
    }
    public function contact()
    {
        return view('student.pages.contact');
    }
}
