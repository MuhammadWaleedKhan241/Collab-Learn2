<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddSession;
use App\Models\Comment;
use App\Models\Teacher\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherCommentController extends Controller
{
    public function show($id)
    {

        $comments = Comment::query()->with(['user', 'teacher', 'admin'])->where('casestudy_id', $id)->get();
        $casestudy = CaseStudy::find($id);
        if (null == $casestudy) {
            abort(404);
        }

        return view('tcomment-detail', compact('comments', 'casestudy'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required|string',

        ]);
        // dd($request->all());
        $session = AddSession::query()->where('teacher_id', Auth::user()->id)->first();
        $data = new Comment();
        $data->casestudy_id = $request->casestudy_id;
        $data->session_id = $session->id;
        $data->user_id = Auth::user()->id;
        $data->comment = $request->comment;
        $data->is_teacher = 1;
        $data->save();
        return redirect()->route('teacher.comments', $request->casestudy_id);
    }
}
