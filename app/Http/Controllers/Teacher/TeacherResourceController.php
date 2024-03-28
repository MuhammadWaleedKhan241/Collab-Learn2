<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
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
}
