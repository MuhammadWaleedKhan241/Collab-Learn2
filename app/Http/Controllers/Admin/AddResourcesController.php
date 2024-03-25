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


        $data = new Resources();
        $data->file_title = $request->input('file_title');
        $data->file_name = $request->input('file_name');
        $data->save();

        return redirect()->route('admin.resource')->with('success', 'Resource added successfully!');
    }
}
