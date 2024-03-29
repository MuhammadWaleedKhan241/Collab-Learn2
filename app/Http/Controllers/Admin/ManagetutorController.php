<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ManageTutor;
use Illuminate\Http\Request;

class ManagetutorController extends controller
{
    public function show()
    {
        // $data = ManageTutor::all();

        $data = ManageTutor::with(['sessions'])->get();
        // dd($data);
        return view('manage-tutor', ['data' => $data]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $data = new ManageTutor();

        $data->first_name = $request->input('first_name');
        $data->last_name = $request->input('last_name');
        $data->username = $request->input('username');
        $data->email = $request->input('email');
        $data->roll_no = $request->input('roll_no');
        $data->phone = $request->input('phone');
        $data->password = $request->input('password');
        $data->address1 = $request->input('address1');
        $data->address2 = $request->input('address2');
        $data->country = $request->input('country');
        $data->city = $request->input('city');
        $data->state = $request->input('state');
        $data->zip = $request->input('zip');
        $data->date_of_birth = $request->input('date_of_birth');
        $data->file = $request->input('file');
        $data->gender = $request->has('gender') ? 'Male' : 'Female';

        // $checkbox_data = $request->input('gender');
        // $data->gender = implode($checkbox_data);

        $data->save();
        return back()->with('success', 'User added successfully!');
    }


    public function delete($id)
    {

        ManageTutor::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $data =  ManageTutor::find($id);

        return view('tutor-edit-form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',

        ]);
        $data =  ManageTutor::find($id);

        $data->first_name = $request->input('first_name');
        $data->last_name = $request->input('last_name');
        $data->username = $request->input('username');
        $data->email = $request->input('email');
        $data->roll_no = $request->input('roll_no');
        $data->phone = $request->input('phone');
        if ($request->input('password')) {
            $data->password = $request->input('password');
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
        //$data->gender = implode(',', ['gender']);
        //dd($data);
        $data->save();
        return redirect()->route('admin.managetutor')->with('success', 'Session Addeed Successfully!');
    }
}
