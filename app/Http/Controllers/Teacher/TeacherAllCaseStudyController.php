<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddSession;
use App\Models\Teacher\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherAllCaseStudyController extends Controller
{
    public function show()
    {

        $casestudies = AddSession::with(['casestudies'])->where('teacher_id', Auth::user()->id)->get();
        return view('tcase-studies', compact('casestudies'));
    }
    public function sessionCaseStudy($id)
    {

        $casestudies = CaseStudy::query()->with(['user', 'session'])->where('session_id', $id)->get();
        return view('session-casestudies', compact('casestudies'));
    }
}
