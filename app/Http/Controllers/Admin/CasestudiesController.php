<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher\AddSession;
use Illuminate\Http\Request;

class CasestudiesController extends controller
{
    public function show()
    {
        $casestudies = AddSession::with(['casestudies'])->get();
        return view('case-studies', compact('casestudies'));
    }
}
