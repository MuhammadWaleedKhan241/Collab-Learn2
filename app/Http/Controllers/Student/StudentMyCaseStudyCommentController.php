<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddSession;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentMyCaseStudyCommentController extends Controller
{
    public function show()
    {
        $session = AddSession::query()->where('sessioncode', Auth::user()->session_code)->first();
        $comments = Comment::query()->with('user')->where('session_id', $session->id)->get();

        return view('s-comment-detail', compact('comments'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required|string',

        ]);
        // dd($request->all());
        $session = AddSession::query()->where('sessioncode', Auth::user()->session_code)->first();
        $data = new Comment();
        $data->session_id = $session->id;
        $data->user_id = Auth::user()->id;
        $data->comment = $request->comment;
        $data->save();
        return redirect()->route('student.casestudy.comment', $request->casestydy_id);
    }
}
