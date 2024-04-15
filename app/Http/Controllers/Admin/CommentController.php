<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddSession;
use App\Models\Comment;
use App\Models\CommentReply;

use App\Models\Teacher\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends controller
{
    public function show($id)
    {

        $comments = Comment::query()->with(['user', 'teacher', 'admin', 'reply'])->where('casestudy_id', $id)->get();
        $casestudy = CaseStudy::find($id);
        if (null == $casestudy) {
            abort(404);
        }
        $session = AddSession::query()->with('resources')->where('id', $casestudy->session_id)->first();
        return view('comments', compact('comments', 'casestudy', 'session'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required|string',

        ]);
        $data = new Comment();
        $data->casestudy_id = $request->casestudy_id;
        $data->session_id = $request->session_id;
        $data->user_id = Auth::user()->id;
        $data->comment = $request->comment;
        $data->is_admin = 1;
        $data->save();
        return redirect()->route('admin.comments', $request->casestudy_id);
    }

    public function reply($id)
    {
        $comments = Comment::query()->with(['user', 'teacher', 'admin'])->where('id', $id)->first();
        if (null == $comments) {
            abort(404);
        }
        return view('admin.pages.reply-comment', ['comment' => $comments]);
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
        $data->is_admin = 1;
        $data->save();
        return redirect()->route('admin.comments', $request->casestudy_id);
    }
}
