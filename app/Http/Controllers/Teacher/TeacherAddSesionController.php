<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher\AddSession;
use Illuminate\Http\Request;

class TeacherAddSesionController extends Controller
{
    public function show()
    {
        return view('tadd-session');
    }

    function store(Request $request)
    {

        $request->validate([
            'sessioncode' => ['required', 'integer', 'digits:6'],
            'attribute1' => 'required',
            'attribute2' => 'required',
            'attribute3' => 'required',
            'attribute4' => 'required',
            'attribute5' => 'required',
        ]);


        $data = new AddSession();

        // $data->year = $request->input('year');
        $data->year = date('Y');
        $data->sessioncode = $request->input('sessioncode');
        $data->attribute1 = $request->input('attribute1');
        $data->attribute2 = $request->input('attribute2');
        $data->attribute3 = $request->input('attribute3');
        $data->attribute4 = $request->input('attribute4');
        $data->attribute5 = $request->input('attribute5');

        $data->save();
        return redirect()->route('teacher.session')->with('success', 'Session Addeed Successfully!');
    }
}
