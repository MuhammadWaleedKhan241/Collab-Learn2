<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageStudent extends Model
{
    use HasFactory;
    protected $table = "manage_students_add";

    //     $validatedData = $request->validate([

    //         'first_name' => 'required|string',
    //         'last_name' => 'required|string',
    //         'username' => 'required|string',
    //         'email' => 'required|email',
    //         'roll_no' => 'required|string',
    //         'phone' => 'required|string',
    //         'password' => 'required|string',
    //         'confirm_password' =>'required|string',
    //         'address1'  =>'required|string',
    //         'address2'  =>'required|string',
    //         'country' => 'required|string',
    //         'city' => 'required|string',
    //         'state/province' => 'required|string',
    //         'zip' => 'required|string',
    //         'date_of_birth' => 'required|string',
    //         'file' => 'required|string',
    //         'gender' => 'required|string',
    // ]);

}
