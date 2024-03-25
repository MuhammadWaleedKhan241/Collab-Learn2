<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Resources;
use Illuminate\Http\Request;

class ResourceController extends controller
{
    public function show()
    {
        $data = Resources::all();
        return view('resource', compact('data'));
    }
}
