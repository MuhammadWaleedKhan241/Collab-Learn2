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
            'educationYear' => 'required|numeric',
            'sectorexperiance' => 'required',
            'geolocation' => 'required',
            'useexperiencebefore' => 'required',
            'useful' => 'required',
            'ownbackexpunderstandingstratmang' => 'required',
            'understandingsm' => 'required',
            'explainyourlearn' => 'required',
            'backexperienceinclass' => 'required',
            'learnfromother' => 'required',
            'improvedinfuture' => 'required',
            'anyothercomment' => 'required',
            // 'permission' => 'required'
        ]);

        // $feedback = Feedback::create($validatedData);

        $data = new Feedback();

        $data->name = $request->input('name');
        $data->gender = $request->input('gender');
        $data->experience = $request->input('experience');
        $data->educationYear = $request->input('educationYear');
        $data->sectorexperiance = $request->input('sectorexperiance');
        $data->geolocation = $request->input('geolocation');
        $data->useexperiencebefore = $request->input('useexperiencebefore');
        $data->useful = $request->input('useful');
        $data->ownbackexpunderstandingstratmang = $request->input('ownbackexpunderstandingstratmang');
        $data->understandingsm = $request->input('understandingsm');
        $data->explainyourlearn = $request->input('explainyourlearn');
        $data->backexperienceinclass = $request->input('backexperienceinclass');
        $data->learnfromother = $request->input('learnfromother');
        $data->improvedinfuture = $request->input('improvedinfuture');
        $data->anyothercomment = $request->input('anyothercomment');
        $data->permission = $request->input('permission');
        $data->save();



        // Redirect back with a success message
        return redirect()->route('student.casestudy')->with('success', 'Feedback submitted successfully!');
    }

    public function show()
    {
        $data = Feedback::all();
        $title = "studentFeedback";
        return view('s-feedback', compact('data', 'title'));
    }
}
