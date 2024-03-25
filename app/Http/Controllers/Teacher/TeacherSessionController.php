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
        $teacher = auth()->user();
        $sessions = $teacher->sessions;
        return view('teacher-session', compact('data'));
    }
}
