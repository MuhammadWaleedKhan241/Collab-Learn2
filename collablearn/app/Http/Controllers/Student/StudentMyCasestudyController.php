<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StudentMyCaseStudyController extends Controller
{
    public function show()
    {
        return view('s-case-studies');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'sector' => 'required|string',
            'country' => 'required|string',
            'models_and_frameworks' => 'required|string',
            'file' => 'nullable|file|max:10240', // Adjust max file size as needed
        ]);

        $caseStudy = new CaseStudy();
        $caseStudy->title = $request->title;
        $caseStudy->sector = $request->sector;
        $caseStudy->country = $request->country;
        $caseStudy->models_and_frameworks = $request->models_and_frameworks;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName);
            $caseStudy->file_path = $filePath;
        }

        $caseStudy->save();

        return redirect()->back()->with('success', 'Case study submitted successfully!');
    }
}
