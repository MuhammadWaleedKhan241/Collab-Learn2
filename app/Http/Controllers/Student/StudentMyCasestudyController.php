<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddSession;
use App\Models\Image;
use App\Models\Teacher\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentMyCaseStudyController extends Controller
{
    public function show()
    {
        $sessions = AddSession::query()->where('sessioncode', Auth::user()->session_code)->first();
        // dd($sessions);
        if (null == $sessions) {
            return abort(404);
        }
        $data = Casestudy::with(['session'])->where('user_id', Auth::user()->id)->get();

        return view('s-case-studies', compact('data', 'sessions'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required|string',
            'attribute1' => 'nullable',
            'attribute2' => 'nullable',
            'attribute3' => 'nullable',
            'attribute4' => 'nullable',
            'attribute5' => 'nullable',
            'country' => 'nullable',
            'file' => 'required|file|max:2048',

        ]);
        $data = new CaseStudy();
        $data->title = $request->title;
        $data->session_id = $request->session_id;
        $data->user_id =  Auth::user()->id;
        $data->attribute1 = $request->input('attribute1');
        $data->attribute2 = $request->input('attribute2');
        $data->attribute3 = $request->input('attribute3');
        $data->attribute4 = $request->input('attribute4');
        $data->attribute5 = $request->input('attribute5');
        $data->country = $request->input('country');
        if ($request->hasFile('file')) {
            $path = Image::image_upload($request->file, 'casestudy');
        } else {
            $path = null;
        }
        $data->file = $path;
        $data->save();
        return redirect()->route('student.casestudy');
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
