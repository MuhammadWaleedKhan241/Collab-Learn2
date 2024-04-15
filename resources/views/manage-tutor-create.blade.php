@extends('layouts.admin.admin-master')
@section('content')
<div class="container-fluid position-relative">
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Add New Tutor</h5>
    </div>
    <div class="card-body">


        <form action="{{ route('admin.tutor.submit') }}" method="POST" class="row g-3 needs-validation" novalidate>
            @csrf
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
            @endif
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label for="validationTooltip01" class="form-label">First
                        Name</label>
                    <input type="text" class="form-control" id="validationTooltip01" name="first_name"
                        value="{{old('first_name')}}">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="validationTooltip02" class="form-label">Last
                        Name</label>
                    <input type="text" class="form-control" id="validationTooltip02" name="last_name"
                        value="{{old('last_name')}}">
                </div>
                <div class="col-md-6 mb-2 ">
                    <label for="validationTooltip02" class="form-label">Education</label>
                    <input type="text" class="form-control" id="validationTooltip02" name="education"
                        value="{{old('education')}}">
                </div>
                <div class="col-md-6 mb-2 ">
                    <label for="validationTooltip02" class="form-label">Specialization</label>
                    <input type="text" class="form-control" id="validationTooltip02" name="specialization"
                        value="{{old('specialization')}}">
                </div>
                <div class="col-md-6 mb-2 ">
                    <label for="validationTooltip02" class="form-label">Session</label>
                    <select id="Session" name="session_id" aria-label=".form-select-lg example" class="form-select">
                        <option value="null" class="">Select the Session</option>
                        @foreach ($session as $session)
                        <option value="" class="">{{ $session->sessioncode }}</option>

                        @endforeach
                    </select>
                </div>


                <div class="col-md-6 mb-2 ">
                    <label for="validationTooltipUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" value="{{old('username')}}" name="username"
                            id="username">
                    </div>
                </div>
                <div class="col-md-6 mb-2 ">
                    <label for="validationTooltip03" class="form-label">Email</label>
                    <input type="text" class="form-control" value="{{old('email')}}" name="email" id="email">
                </div>
                <div class="col-md-6 mb-2 ">
                    <label for="validationTooltip03" class="form-label">Phone</label>
                    <input type="text" class="form-control" value="{{old('phone')}}" name="phone" id="phone">
                </div>
                <div class="col-md-6 mb-2 ">
                    <label for="validationTooltipUsername" class="form-label">Password</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" name="password" id="password">
                    </div>
                </div>
                <div class="col-md-6 mb-2  ">
                    <label for="validationTooltip03" class="form-label">Confirm
                        Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        required autocomplete="new-password">
                </div>


                <div class="col-md-6 mb-2 ">
                    <label for="validationTooltipUsername" class="form-label">Address
                        1</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" name="address1" value="{{old('address1')}}"
                            id="address1">
                    </div>
                </div>
                <div class="col-md-6 mb-2 ">
                    <label for="validationTooltip03" class="form-label">Address
                        2</label>
                    <input type="text" class="form-control" name="address2" id="address2">
                </div>


                <div class="col-md-6 mb-2">
                    <label for="inputState" class="form-label">Country</label>
                    <select id="inputState" class="form-select" name="country">
                        <option selected>Choose...</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="India">India</option>
                        <option value="USA">USA</option>
                    </select>
                </div>
                <div class="col-md-6 mb-2">
                    <label for="inputState" class="form-label">City</label>
                    <input type="text" class="form-control" value="{{old('city')}}" name="city" id="city">
                </div>


                <div class="col-md-6 mb-2">
                    <label for="inputState" class="form-label">State</label>
                    <input type="text" class="form-control" value="{{old('state')}}" name="state"
                        id="validationTooltip03">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" value="{{old('zip')}}" name="zip" id="inputZip">
                </div>


                <div class="col-md-6 mb-2">
                    <label for="inputZip" class="form-label ">Date of Birth</label>
                    <input type="date" class="form-control" value="{{old('date_of_birth')}}" name="date_of_birth"
                        id="date_of_birth">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="formFile" class="form-label">Attach
                        file</label>
                    <input class="form-control" type="file" name="file" id="formFile">
                </div>
                <div class="col-md-6 mb-2 ">
                    <label for="formFile" class="form-label">Gender</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
            </div>
            <div class="col-12 modal-footer">
                <button class="btn btn-outline-success" type="submit" data-bs-dismiss="modal">Add</button>
                <button class="btn btn-outline-danger" type="submit" data-bs-dismiss="modal">Cancel</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
