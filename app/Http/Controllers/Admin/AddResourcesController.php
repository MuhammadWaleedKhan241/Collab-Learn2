<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\Models\Admin\Resources;
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
            'file_title' => 'required|string|max:255',
            'file_name' => 'required|file|max:2048',
        ]);


        $resource = new Resources();
        $resource->file_title = $request->input('file_title');
        $resource->file_name = $request->input('file_name');
        $resource->session_id = $request->input('session_Id'); // Assuming session_id is provided in the request
        $resource->save();

        return redirect()->route('admin.resource')->with('success', 'Resource added successfully!');
    }
}
