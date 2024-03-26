<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherAllCaseStudyController extends Controller
{
    public function show()
    {

        $casestudies = AddSession::with(['casestudies'])->where('teacher_id', Auth::user()->id)->get();
        return view('tcase-studies', compact('casestudies'));
    }
}
