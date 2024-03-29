<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher\AddSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherAddSesionController extends Controller
{

    public function show()
    {
        $session_code = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        //dd($session_code);
        return view('tadd-session', compact('session_code'));
    }

    function store(Request $request)
    {
        $request->validate([
            'sessioncode' => ['required', 'integer', 'digits:6', 'unique:add_sessions,sessioncode'],
            'attribute1' => 'nullable',
            'attribute2' => 'nullable',
            'attribute3' => 'nullable',
            'attribute4' => 'nullable',
            'attribute5' => 'nullable',
        ]);


        $data = new AddSession();

        // $data->year = $request->input('year');
        $data->year = date('Y');
        $data->sessioncode = $request->input('sessioncode');
        $data->teacher_id = Auth::user()->id;
        $data->attribute1 = $request->input('attribute1');
        $data->attribute2 = $request->input('attribute2');
        $data->attribute3 = $request->input('attribute3');
        $data->attribute4 = $request->input('attribute4');
        $data->attribute5 = $request->input('attribute5');

        $data->save();
        return redirect()->route('teacher.session')->with('success', 'Session Addeed Successfully!');
    }
}
