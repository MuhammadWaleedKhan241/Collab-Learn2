<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\Models\Admin\Resources;
use App\Models\Image;
use Illuminate\Http\Request;

class AddResourcesController extends Controller
{
    public function create()
    {
        return view('add_resources.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240', // Example validation for file uploads
        ]);

        $resource = new Resources();
        $resource->title = $request->input('title');
        $resource->session_id = $request->input('session_id');
        if ($request->hasFile('file')) {
            $path = Image::image_upload($request->file, 'resources');
        } else {
            $path = null;
        }
        $resource->file = $path;
        $resource->save();

        return redirect()->route('admin.resource', $request->input('session_id'))->with('success', 'Resource added successfully!');
    }
}


//waleed
