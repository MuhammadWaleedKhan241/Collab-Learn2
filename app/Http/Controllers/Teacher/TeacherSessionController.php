<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher\AddSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherSessionController extends Controller
{

    public function show()
    {
        $data = AddSession::query()->where('teacher_id', Auth::user()->id)->get();
        // $teacher = auth()->user();
        // dd($teacher);
        // $sessions = $teacher->sessions;
        return view('teacher-session', compact('data'));
    }
}
