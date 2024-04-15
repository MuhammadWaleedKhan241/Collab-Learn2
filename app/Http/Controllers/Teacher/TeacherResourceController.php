<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Admin\Resources;
use App\Models\Image;
use App\Models\Teacher\AddSession;
use App\Models\Teacher\Resource;
use Illuminate\Http\Request;

class TeacherResourceController  extends Controller
{
    public function show($id)
    {
        $resources = Resource::query()->where('session_id', $id)->get();
        if (null == $resources) {
            abort(404);
        }
        $session = AddSession::query()->where('id', $id)->first();
        if (null == $session) {
            abort(404);
        }

        return view('tresources', compact('resources', 'session'));
    }


    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240', // Example validation for file uploads
        ]);
        $data = new Resource();
        $data->title = $request->title;
        $data->session_id = $request->session_id;
        if ($request->hasFile('file')) {
            $path = Image::image_upload($request->file, 'resources');
        } else {
            $path = null;
        }
        $data->file = $path;

        $data->save();

        return redirect()->back()->with('success', 'Data has been successfully inserted!');
    }

    public function edit($id)
    {
        $data =  Resources::find($id);
        return view('teacher-edit-resources', compact('data'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'file|max:2048',
        ]);

        $resource =  Resources::with('session')->find($id);
        $resource->title = $request->input('title');
        if ($request->hasFile('file')) {
            $path = Image::image_upload($request->file, 'resources');
            $resource->file = $path;
        }
        $resource->save();

        return redirect()->route('teacher.view_resources', $resource->session_id)->with('success', 'Session Addeed Successfully!');
    }

    public function delete($id)
    {
        Resources::destroy($id);
        return back();
    }
}
