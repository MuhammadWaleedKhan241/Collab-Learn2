<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherDashboardController  extends Controller
{
    public function show()
    {
        return view('teacher-dashboard');
    }
}