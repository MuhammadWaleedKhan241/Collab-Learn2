@extends('layouts.admin.admin-master')
@section('content')
<div class="container-fluid">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
    @endif
    <form action="{{ route('admin.update.tutor', $data->id) }}" method="POST" class="row g-3 needs-validation"
        novalidate>
        @csrf
        <div class="row mt-3">
            <div class="col-md-6 mb-2">
                <label for="validationTooltip01" class="form-label">First
                    Name</label>
                <input type="text" class="form-control" id="validationTooltip01" name="first_name"
                    value="{{ $data->first_name }}">
            </div>
            <div class="col-md-6 mb-2">
                <label for="validationTooltip02" class="form-label">Last
                    Name</label>
                <input type="text" class="form-control" id="validationTooltip02" name="last_name"
                    value="{{ $data->last_name }}">
            </div>
            <div class="col-md-6 mb-2">
                <label for="validationTooltip02" class="form-label">Education</label>
                <input type="text" class="form-control" id="validationTooltip02" name="education"
                    value="{{$data->education}}">
            </div>
            <div class="col-md-6 mb-2 ">
                <label for="validationTooltip02" class="form-label">Specialization</label>
                <input type="text" class="form-control" id="validationTooltip02" name="specialization"
                    value="{{$data->specialization}}">
            </div>

            <div class="col-md-6 mb-2 ">
                <label for="validationTooltip02" class="form-label">Session</label>
            <select id="Session" name="session_id" aria-label=".form-select-lg example"
                class="form-select">
                <option value="null" class="">Select the Session</option>
                @foreach ($session as $session)
                <option value="" class="">{{ $session->sessioncode }}</option>

                @endforeach
            </select>
            </div>
            <div class="col-md-6 mb-2">
                <label for="validationTooltipUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="username" name="username" value="{{ $data->username }}">
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <label for="validationTooltip03" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $data->email }}">
            </div>
            <div class="col-md-6 mb-2">
                <label for="validationTooltip03" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $data->phone }}">
            </div>



            <div class="col-md-6 mb-2">
                <label for="validationTooltipUsername" class="form-label">Password</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="password" name="password" value="">
                </div>
            </div>
            <div class="col-md-6 mb-2 ">
                <label for="validationTooltip03" class="form-label">Confirm
                    Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    required autocomplete="new-password">
            </div>


            <div class="col-md-6 mb-2">
                <label for="validationTooltipUsername" class="form-label">Address
                    1</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="address1" name="address1" value="{{ $data->address1 }}">
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <label for="validationTooltip03" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="address2" name="address2" value="{{ $data->address2 }}">
            </div>


            <div class="col-md-6 mb-2">
                <label for="inputState" class="form-label">Country</label>
                <select id="inputState" class="form-select" name="country">
                    <option>Choose...</option>
                    <option value="Pakistan" {{ $data->country === 'Pakistan' ? 'selected' : '' }}>Pakistan
                    </option>
                    <option value="India" {{ $data->country === 'India' ? 'selected' : '' }}>India
                    </option>
                    <option value="USA" {{ $data->country === 'USA' ? 'selected' : '' }}>USA</option>
                </select>
            </div>
            <div class="col-md-6 mb-2">
                <label for="inputState" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ $data->city }}">
            </div>


            <div class="col-md-6 mb-2">
                <label for="inputState" class="form-label">State</label>
                <input type="text" class="form-control" id="validationTooltip03" name="state"
                    value="{{ $data->state }}">
            </div>
            <div class="col-md-6 mb-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="zip" value="{{ $data->zip }}">
            </div>


            <div class="col-md-4">
                <label for="inputZip" class="form-label ">Date of Birth</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                    value="{{ $data->date_of_birth }}">
            </div>
            <div class="col-md-4">
                <label for="formFile" class="form-label">Attach file</label>
                <input class="form-control" type="file" id="formFile" name="file" value="{{ $data->file }}">
            </div>
            <div class="col-md-4 ">
                <label for="formFile" class="form-label">Gender</label>
                <br>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                        {{ $data->gender === 'Male' ? 'checked' : '' }} value="Male">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                        {{ $data->gender === 'Female' ? 'checked' : '' }} value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
            </div>
        </div>
        <div class="col-12 modal-footer">
            <button class="btn btn-outline-success" type="submit" data-bs-dismiss="modal">Update</button>
            <button class="btn btn-outline-danger" type="submit" data-bs-dismiss="modal">Cancel</button>
        </div>
    </form>
</div>
@endsection
