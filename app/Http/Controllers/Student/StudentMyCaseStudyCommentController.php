<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddSession;
use App\Models\Comment;
use App\Models\Teacher\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentMyCaseStudyCommentController extends Controller
{
    public function show($id)
    {
        $session = AddSession::query()->where('sessioncode', Auth::user()->session_code)->first();
        $comments = Comment::query()->with(['user', 'teacher', 'admin'])->where('session_id', $session->id)->where('casestudy_id', $id)->get();
        $casestudy = CaseStudy::find($id);
        if (null == $casestudy) {
            abort(404);
        }

        return view('s-comment-detail', compact('comments', 'casestudy'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required|string',

        ]);
        // dd($request->all());
        $session = AddSession::query()->where('sessioncode', Auth::user()->session_code)->first();
        $data = new Comment();
        $data->casestudy_id = $request->casestudy_id;
        $data->session_id = $session->id;
        $data->user_id = Auth::user()->id;
        $data->comment = $request->comment;
        $data->save();
        return redirect()->route('student.casestudy.comment', $request->casestudy_id);
    }
}
