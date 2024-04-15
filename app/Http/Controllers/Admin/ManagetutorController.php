<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddSession;
use App\Models\Admin\ManageTutor;
use Illuminate\Http\Request;

class ManagetutorController extends controller
{
    public function show()
    {
        // $data = ManageTutor::all();
        $session = AddSession::all();
        $data = ManageTutor::with(['sessions'])->get();
        // dd($data);
        return view('manage-tutor', ['data' => $data, 'session' => $session]);
    }
    public function create()
    {
        $session = AddSession::all();
        $data = ManageTutor::with(['sessions'])->get();
        // dd($data);
        return view('manage-tutor-create', ['data' => $data, 'session' => $session]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'education' => 'required',
            'specialization' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'phone' => 'required',
            'address1' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
        ]);

        $data = new ManageTutor();

        $data->first_name = $request->input('first_name');
        $data->last_name = $request->input('last_name');
        $data->education = $request->input('education');
        $data->specialization = $request->input('specialization');
        $data->username = $request->input('username');
        $data->email = $request->input('email');
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
        return redirect()->route('admin.managetutor')->with('success', 'Tutor created successfully!');;
    }


    public function delete($id)
    {

        ManageTutor::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $data =  ManageTutor::find($id);
        $session = AddSession::all();
        return view('tutor-edit-form', compact('data', 'session'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'education' => 'required',
            'specialization' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address1' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
        ]);
        $data =  ManageTutor::find($id);

        $data->first_name = $request->input('first_name');
        $data->last_name = $request->input('last_name');
        $data->education = $request->input('education');
        $data->specialization = $request->input('specialization');
        $data->username = $request->input('username');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        if ($request->input('password')) {
            $request->validate([
                'password' => 'required|confirmed',
            ]);
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
        $data->save();
        return redirect()->route('admin.managetutor')->with('success', 'Tutor Updated Successfully!');
    }
}
