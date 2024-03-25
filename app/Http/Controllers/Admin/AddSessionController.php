<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddSession;
use Illuminate\Http\Request;

class AddSessionController extends controller
{
    public function show()
    {
        return view('add-session');
    }

    function store(Request $request)
    {

        $request->validate([
            //'year' => 'required',
            'sessioncode' => ['required', 'integer', 'digits:6'],
            'attribute1' => 'required',
            'attribute2' => 'required',
            'attribute3' => 'required',
            'attribute4' => 'required',
            'attribute5' => 'required',
        ]);


        $data = new AddSession();

        $data->year = $request->input('year');
        $data->sessioncode = $request->input('sessioncode');
        $data->attribute1 = $request->input('attribute1');
        $data->attribute2 = $request->input('attribute2');
        $data->attribute3 = $request->input('attribute3');
        $data->attribute4 = $request->input('attribute4');
        $data->attribute5 = $request->input('attribute5');

        $data->save();
        return redirect()->route('admin.managesession')->with('success', 'Session Addeed Successfully!');
    }
}
