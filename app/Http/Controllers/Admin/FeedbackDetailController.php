<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;

use Illuminate\Http\Request;

class FeedbackDetailController extends controller
{
    public function show(int $id)
    {
        $data = Feedback::query()->with('user')->findOrFail($id);
        return view('feedback-details', ['data' => $data]);
    }
}
