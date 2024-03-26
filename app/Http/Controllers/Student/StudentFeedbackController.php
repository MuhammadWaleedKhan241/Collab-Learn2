<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;

class StudentFeedbackController extends Controller
{
    public function store(Request $request)
    {

        $user_id = auth()->id();
        $data = new Feedback();
        $data->user_id = $user_id;
        // $data->name = $request->input('name');
        $data->gender = $request->input('gender');
        $data->age = $request->input('age');
        $data->experience = $request->input('experience');
        $data->educatuionYear = $request->input('educatuionYear');
        $data->sectorexperiance = $request->input('sectorexperiance');
        $data->geolocation = $request->input('geolocation');
        $data->useexperiencebefore = $request->input('useexperiencebefore');
        $data->useful = $request->input('useful');
        $data->ownbackexpunderstandingstratmang = $request->input('ownbackexpunderstandingstratmang');
        $data->understandingsm = $request->input('understandingsm');
        $data->explainyourlearn = $request->input('explainyourlearn');
        $data->backexpinclass = $request->input('backexpinclass');
        $data->learnfromother = $request->input('learnfromother');
        $data->improvedinfuture = $request->input('improvedinfuture');
        $data->anyothercomment = $request->input('anyothercomment');
        $data->permission = $request->has('permission') ? 1 : 0;

        $data->save();

        return redirect()->route('student.casestudy')->with('success', 'Feedback submitted successfully!');
    }

    public function show()
    {
        $data = Feedback::with('user')->get();
        $title = "studentFeedback";
        return view('s-feedback', compact('data', 'title'));
    }
}
