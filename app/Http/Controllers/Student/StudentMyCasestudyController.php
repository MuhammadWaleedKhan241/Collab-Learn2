<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Casestudy;
use Illuminate\Http\Request;

class StudentMyCasestudyController extends Controller
{
    public function show()
    {
        $data = Casestudy::all();
        return view('s-case-studies', compact('data'));
    }



    // public function submitCaseStudy(Request $request)
    // {
    //     // Validate the incoming request data
    //     $validatedData = $request->validate([
    //         'title' => 'required|string',
    //         'sector' => 'required|string',
    //         'country' => 'required|string',
    //         'models_and_frameworks' => 'required|string',
    //         'file' => 'required|file',
    //     ]);
    // }
}
