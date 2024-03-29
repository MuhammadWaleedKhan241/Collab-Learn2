<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddSession;
use Illuminate\Http\Request;

class ManagesessionController extends controller
{
    public function show()
    {
        $data = AddSession::all();
        return view('manage-session', compact('data'));
    }
}
