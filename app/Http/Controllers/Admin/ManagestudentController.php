<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ManageStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagestudentController extends controller
{
    public function show()
    {
        $data = ManageStudent::with(['sessions'])->get();

        return view('manage-student');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',

        ]);

        $data = new ManageStudent();

        $data->first_name = $request->input('first_name');
        $data->last_name = $request->input('last_name');
        $data->username = $request->input('username');
        $data->email = $request->input('email');
        $data->roll_no = $request->input('roll_no');
        $data->phone = $request->input('phone');
        $data->password = Hash::make($request->input('password'));
        $data->address1 = $request->input('address1');
        $data->address2 = $request->input('address2');
        $data->country = $request->input('country');
        $data->city = $request->input('city');
        $data->state = $request->input('state');
        $data->zip = $request->input('zip');
        $data->date_of_birth = $request->input('date_of_birth');
        $data->file = $request->input('file');
        $data->gender = $request->input('gender');
        $data->save();
        return back()->with('success', 'User created successfully!');
    }

    public function students()

    {
        $data = ManageStudent::all();

        return view('manage-student', compact('data'));
    }

    public function delete($id)
    {

        ManageStudent::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $data =  ManageStudent::find($id);

        return view('student-edit-form', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
        ]);
        $data =  ManageStudent::find($id);

        $data->first_name = $request->input('first_name');
        $data->last_name = $request->input('last_name');
        $data->username = $request->input('username');
        $data->email = $request->input('email');
        $data->roll_no = $request->input('roll_no');
        $data->phone = $request->input('phone');
        if ($request->input('password')) {
            $data->password = Hash::make($request->input('password'));
        }
        $data->address1 = $request->input('address1');
        $data->address2 = $request->input('address2');
        $data->country = $request->input('country');
        $data->city = $request->input('city');
        $data->state = $request->input('state');
        $data->zip = $request->input('zip');
        $data->date_of_birth = $request->input('date_of_birth');
        $data->file = $request->input('file');
        $data->gender = $request->input('gender');
        $data->save();
        return redirect()->route('admin.managestudent')->with('success', 'Session Addeed Successfully!');
    }
}
