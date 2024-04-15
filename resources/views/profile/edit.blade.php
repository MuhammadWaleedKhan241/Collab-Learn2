@extends('layouts.admin.admin-master')
@section('content')
<div class="container-fluid">
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Admin Profile</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body py-5">
            <div class="row ">
                <div class="col-lg-4 ">
                    <div class="ms-4">
                        <img src="{{ asset('images/profile/user-1.jpg') }}" class="rounded-circle"
                            width="100" height="100" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <p><strong>User Id:</strong>{{$user->id}} </p>
                        <p><strong>Email:</strong> {{$user->email}} </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
