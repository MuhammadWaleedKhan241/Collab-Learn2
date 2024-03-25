<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher\AddSession;
use Illuminate\Http\Request;

class TeacherSessionController extends Controller
{
    public function show()
    {
        $data = AddSession::all();
        return view('teacher-session', compact('data'));
    }
}
