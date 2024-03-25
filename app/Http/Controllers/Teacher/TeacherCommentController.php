<?php

namespace App\Http\Controllers\Teacher;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TeacherCommentController extends Controller
{
    public function show()
    {
        return view('tcomment-detail');
    }
}