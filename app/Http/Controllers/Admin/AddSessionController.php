<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddSession;
use Illuminate\Http\Request;

class AddSessionController extends controller
{
    public function show()

    {
        $sessioncode = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        return view('add-session', compact('sessioncode'));
    }

    function store(Request $request)
    {

        $request->validate([
            //'year' => 'required',
            'sessioncode' => ['required', 'integer', 'digits:6', 'unique:add_sessions,sessioncode'],
            'attribute1' => 'nullable',
            'attribute2' => 'nullable',
            'attribute3' => 'nullable',
            'attribute4' => 'nullable',
            'attribute5' => 'nullable',
            'is_country' => 'nullable',
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
        $data->is_country = $request->input('is_country') ?? 0;

        $data->save();
        return redirect()->route('admin.managesession')->with('success', 'Session Addeed Successfully!');
    }
}
