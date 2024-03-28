<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Teacher\AddSession;
use App\Models\Teacher\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends controller
{
    public function show($id)
    {

        $comments = Comment::query()->with(['user', 'teacher', 'admin'])->where('casestudy_id', $id)->get();
        $casestudy = CaseStudy::find($id);
        if (null == $casestudy) {
            abort(404);
        }

        return view('comments', compact('comments', 'casestudy'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required|string',

        ]);
        // dd($request->all());

        $data = new Comment();
        $data->casestudy_id = $request->casestudy_id;
        $data->session_id = $request->session_id;
        $data->user_id = Auth::user()->id;
        $data->comment = $request->comment;
        $data->is_admin = 1;
        $data->save();
        return redirect()->route('admin.comments', $request->casestudy_id);
    }
}
