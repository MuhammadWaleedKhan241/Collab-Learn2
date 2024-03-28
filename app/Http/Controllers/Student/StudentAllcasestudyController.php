<?php

namespace App\Http\Controllers\Student;


use App\Models\Admin\AddSession;
use App\Http\Controllers\Controller;
use App\Models\Teacher\CaseStudy;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class StudentAllcasestudyController extends Controller
{


    public function show()
    {
        $session = AddSession::query()->where('sessioncode', Auth::user()->session_code)->first();
        // dd($sessions);
        if (null == $session) {
            return abort(404);
        }
        $data = CaseStudy::query()->with(['user', 'session'])->where('session_id', $session->id)->get();


        return view('s-allcasestudy', compact('data', 'session'));
    }
}
