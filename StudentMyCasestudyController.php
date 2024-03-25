<?php

namespace App\Http\Controllers\Student;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StudentMycasestudyController extends Controller
{
    public function show()
    {
        return view('s-case-studies');
    }



    public function submitCaseStudy(Request $request)
    {
    // Validate the incoming request data
    $validatedData = $request->validate([
        'title' => 'required|string',
        'sector' => 'required|string',
        'country' => 'required|string',
        'models_and_frameworks' => 'required|string',   
        'file' => 'required|file',
    ]);
    }

   

    public function showSubmittedCaseStudies()
    {
    $submittedCaseStudies = SubmittedCaseStudy::all(); // Assuming SubmittedCaseStudy is your model name
    return view('s-case-studies', compact('submittedCaseStudies'));
    }    
}