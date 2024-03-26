<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TeacherResourceController  extends Controller
{
    public function show()
    {
        return view('tresources');
    }


    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'file_title' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240', // Example validation for file uploads
        ]);

        // Process the file upload and other data insertion logic
        // Make sure to handle file uploads appropriately

        // Example: store the uploaded file
        $file = $request->file('file');
        $path = $file->store('files');

        // Create a new record in the database using the validated data
        $data::create([
            'File_Title' => $validatedData['file_title'],
            'File_Name' => $file->getClientOriginalName(),
            'Path' => $path,
            'Added_On' => now(), // Example for current timestamp
        ]);

        // Redirect back or to a success page after successful data insertion
        return redirect()->back()->with('success', 'Data has been successfully inserted!');
    }
}
