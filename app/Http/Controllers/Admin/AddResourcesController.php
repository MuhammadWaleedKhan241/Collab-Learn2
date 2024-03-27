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
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|max:2048',
        ]);

        $resource = new Resources();
        $resource->file_title = $request->input('title');
        $resource->session_id = $request->input('session_id');
        if ($request->hasFile('file')) {
            $path = Image::image_upload($request->file, 'resourses');
        } else {
            $path = null;
        }
        $resource->file_name = $path;
        $resource->save();

        return redirect()->route('admin.resource', $request->input('session_id'))->with('success', 'Resource added successfully!');
    }
}
