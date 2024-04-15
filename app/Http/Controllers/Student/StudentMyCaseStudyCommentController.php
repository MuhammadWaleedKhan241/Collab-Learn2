<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddSession;
use App\Models\Admin\Resources;
use App\Models\Comment;
use App\Models\CommentReply;
use App\Models\Teacher\CaseStudy;
use App\Models\Teacher\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentMyCaseStudyCommentController extends Controller
{
    public function show($id)
    {
        $session = AddSession::query()->with('resources')->where('sessioncode', Auth::user()->session_code)->first();
        $comments = Comment::query()->with(['user', 'teacher', 'admin', 'reply'])->where('session_id', $session->id)->where('casestudy_id', $id)->get();
        if (null == $comments) {
            abort(404);
        }
        $casestudy = CaseStudy::find($id);
        if (null == $casestudy) {
            abort(404);
        }
        // $resources = Resources::query()->where('session_id', $session->id)->get();

        return view('s-comment-detail', compact('comments', 'casestudy', 'session'));
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
        $data->session_id = $request->session_id;
        $data->user_id = Auth::user()->id;
        $data->comment = $request->comment;
        $data->save();

        return redirect()->route('student.casestudy.comment', $request->casestudy_id);
    }

    public function reply($id)
    {
        $comments = Comment::query()->with(['user', 'teacher', 'admin'])->where('id', $id)->first();
        if (null == $comments) {
            abort(404);
        }
        return view('student.pages.reply-comment', ['comment' => $comments]);
    }
    public function replyStore(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required|string',
        ]);
        $data = new CommentReply();
        $data->user_id = Auth::user()->id;
        $data->comment = $request->comment;
        $data->comment_id = $request->comment_id;
        $data->save();

        return redirect()->route('student.casestudy.comment', $request->casestudy_id);
    }
}
