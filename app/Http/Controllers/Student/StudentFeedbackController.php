<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;

class StudentFeedbackController extends Controller
{
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'gender' => 'required',
            'age' => 'required',
            'experience' => 'required|numeric',
            'educationyear' => 'required|numeric',
            'sectorexperiance' => 'required',
            'geolocation' => 'required',
            'useexperiencebefore' => 'required',
            'usefull' => 'required',
            'ownbackexpunderstandingstratmang' => 'required',
            'understandingsm' => 'required',
            'explainyourlearn' => 'required',
            'backexperienceinclass' => 'required',
            'learnfromother' => 'required',
            'improvedinfuture' => 'required',
            'anyothercomment' => 'required',
            'permission' => 'required'
        ]);

        // Create a new Feedback instance and fill it with validated data
        // Create a new Feedback instance with fillable data only
        $feedback = Feedback::create($validatedData);

        // Redirect back with a success message
        return back()->with('success', 'Feedback submitted successfully!');
    }

    public function show()
    {
        $data = Feedback::all();
        $title = "studentFeedback";
        return view('s-feedback', compact('data', 'title'));
    }
}
