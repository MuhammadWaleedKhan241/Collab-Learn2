<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Resources;
use App\Models\Image;
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

        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'file|max:2048',
        ]);


        $resource =  Resources::find($id);
        $resource->title = $request->input('title');
        $resource->session_id = $request->input('session_id');
        if ($request->hasFile('file')) {
            $path = Image::image_upload($request->file, 'resources');
            $resource->file = $path;
        }
        $resource->save();

        return redirect()->route('admin.resource', $request->input('session_id'))->with('success', 'Session Addeed Successfully!');
    }

    public function delete($id)
    {

        Resources::destroy($id);
        return back();
    }
}
