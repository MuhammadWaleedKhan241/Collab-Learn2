<?php

namespace App\Http\Controllers\Student;

use App\Models\Casestudy;
use App\Models\Admin\AddSession;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class StudentAllcasestudyController extends Controller
{


    public function show()
    {
        $sessions = AddSession::query()->where('sessioncode', Auth::user()->session_code)->first();
        // dd($sessions);
        if (null == $sessions) {
            return abort(404);
        }
        $data = Casestudy::with(['sessions'])->where('user_id', Auth::user()->id)->get();

        return view('s-allcasestudy', compact('data', 'sessions'));
    }
}
