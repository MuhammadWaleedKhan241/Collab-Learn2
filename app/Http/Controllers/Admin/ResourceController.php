<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Resources;
use App\Models\Teacher\Resource;
use Illuminate\Http\Request;

class ResourceController extends controller
{
    public function show($id)
    {
        $session_id = $id;
        $data = Resources::query()->where('session_id', $id)->get();
        return view('resource', compact('data', 'session_id'));
    }



    public function edit($id)
    {
        $data =  Resources::find($id);

        return view('edit-resources', compact('data'));
    }


    public function update(Request $request, $id)
    {

        $data =  Resources::find($id);

        $data->file_title = $request->input('file_title');

        $data->file_name = $request->input('file_name');


        $data->save();
        return redirect()->route('admin.resource')->with('success', 'Session Addeed Successfully!');
    }

    public function delete($id)
    {

        Resources::destroy($id);
        return back();
    }
}
