<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddSession;
use App\Models\Casestudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentMyCasestudyController extends Controller
{
    public function show()
    {
        $sessions = AddSession::query()->where('sessioncode', Auth::user()->session_code)->first();
        // dd($sessions);
        if (null == $sessions) {
            return abort(404);
        }
        $data = Casestudy::with(['sessions'])->where('user_id', Auth::user()->id)->get();

        return view('s-case-studies', compact('data', 'sessions'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required|string',
            // 'file' => 'required|file',
        ]);
        $data = new Casestudy();
        $data->title = $request->title;
        $data->session_id = $request->session_id;
        $data->user_id =  Auth::user()->id;
        $data->save();
        return redirect()->route('student.casestudy');
    }


    // public function submitCaseStudy(Request $request)
    // {
    //     // Validate the incoming request data
    //     $validatedData = $request->validate([
    //         'title' => 'required|string',
    //         'sector' => 'required|string',
    //         'country' => 'required|string',
    //         'models_and_frameworks' => 'required|string',
    //         'file' => 'required|file',
    //     ]);
    // }
}
