@extends('student.layouts.master')
@section('content')
<div class="container-fluid">
    {{-- <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Admin Profile</h4>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="card w-50 mx-auto">
        <div class="card-body ">
            <div class="row ">
                <h2 class="text-center ">Change Password</h2>
                <form method="POST" action="{{ route('student.password.change') }}">
                    @csrf
                    <div class="my-3">
                        <label for="OldPassword" class="form-label">Old Password</label>
                        <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror"id="OldPassword"
                            placeholder="Enter Old Passord">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="OldPassword" class="form-label">New Password</label>
                        <input type="password"
                        class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password" placeholder="new password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="OldPassword" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="password_confirmation"
                        name="password_confirmation" placeholder="Confirm New Password " required>

                    </div>
                    <button class="btn btn-primary">Change Password</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
