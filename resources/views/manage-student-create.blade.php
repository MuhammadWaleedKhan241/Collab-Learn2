@extends('layouts.admin.admin-master')
@section('content')
<div class="container-fluid position-relative">
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Add New Student</h5>
    </div>
    <div class="card-body">

        <form action="{{ route('admin.student_submit') }}" method="post"
        class="row g-3 needs-validation" novalidate>
        @csrf
        @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif
        <div class="d-flex">
            <div class="col-md-6 me-2  ">
                <label for="validationTooltip01" class="form-label">First
                    Name</label>
                <input type="text" class="form-control" name="first_name"
                    id="validationTooltip01" value="{{old('first_name')}}">
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip02" class="form-label">Last
                    Name</label>
                <input type="text" class="form-control" id="validationTooltip02" required  name="last_name"
                    value="{{old('last_name')}}">
            </div>
        </div>
        <div class="d-flex">
            <div class="col-md-6 me-2 position-relative">
                <label for="validationTooltipUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" required  name="username" id="username"  value="{{old('username')}}">
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip03" class="form-label">Email</label>
                <input type="text" class="form-control" required  name="email" id="email"  value="{{old('email')}}">
            </div>
        </div>
        <div class="d-flex">
            <div class="col-md-6 me-2 position-relative">
                <label for="validationTooltipUsername" class="form-label">Roll
                    No</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" required  name="roll_no" id="roll_no" value="{{old('roll_no')}}">
                </div>
            </div>
            <div class="col-md-6 me-2 position-relative">
                <label for="validationTooltip03" class="form-label">Phone</label>
                <input type="text" class="form-control" required  name="phone" id="phone" value="{{old('phone')}}">
            </div>
        </div>

        <div class="d-flex">
            <div class="col-md-6 me-2 position-relative">
                <label for="validationTooltipUsername" class="form-label">Password</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" required  name="password" id="password" >
                </div>
            </div>
            <div class="col-md-6  position-relative">
                <label for="validationTooltip03" class="form-label">Confirm
                    Password</label>
                <input type="password" class="form-control" id="password_confirmation"
                    required  name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
        <div class="d-flex">
            <div class="col-md-6 me-2 position-relative">
                <label for="validationTooltipUsername" class="form-label">Address
                    1</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" required  name="address1" id="address1" value="{{old('address1')}}">
                </div>
            </div>
            <div class="col-md-6 me-2 position-relative">
                <label for="validationTooltip03" class="form-label">Address 2</label>
                <input type="text" class="form-control" name="address2" id="address2" >
            </div>
        </div>
        <div class="d-flex">
            <div class="col-md-6 me-2">
                <label for="inputState" class="form-label">Country</label>
                <select id="inputState" class="form-select" name="country">
                    <option selected>Choose...</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="India">India</option>
                    <option value="USA">USA</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputState" class="form-label">City</label>
                <input type="text" class="form-control" required name="city" id="city" value="{{old('city')}}">
            </div>
        </div>
        <div class="d-flex">
            <div class="col-md-6 me-2">
                <label for="inputState" class="form-label">State</label>
                <input type="text" class="form-control" required name="state" id="validationTooltip03" value="{{old('state')}}">
            </div>
            <div class="col-md-6">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" required name="zip" id="inputZip" value="{{old('zip')}}">
            </div>
        </div>
        <div class="d-flex">
            <div class="col-md-4 me-2">
                <label for="inputZip" class="form-label ">Date of Birth</label>
                <input type="date" class="form-control" required name="date_of_birth" id="date_of_birth" value="{{old('date_of_birth')}}">
            </div>
            <div class="col-md-4 me-2">
                <label for="formFile" class="form-label">Attach file</label>
                <input class="form-control" type="file" name="file"id="formFile">
            </div>
            <div class="col-md-4 ">
                <label for="formFile" class="form-label">Gender</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                        value="Male">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="" id="inlineRadio2"
                        value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
            </div>
        </div>
        <div class="col-12 modal-footer">
            <button class="btn btn-outline-success" type="submit"
                data-bs-dismiss="modal">Add</button>
            <button class="btn btn-outline-danger" type="submit"
                data-bs-dismiss="modal">Cancel</button>
        </div>
    </form>

    </div>
</div>
</div>
@endsection
