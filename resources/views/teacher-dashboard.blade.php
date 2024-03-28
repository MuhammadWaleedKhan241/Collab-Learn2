@extends('teacher.layouts.master')
@section('content')
    <div class="col-12">
        <div class="d-flex align-items-center gap-4 mb-4">
            <div class="position-relative">
                <div class=" border-2 border-primary rounded-circle">

                    <img src="{{ asset('images/profile/user-1.jpg') }}" class="rounded-circle m-1" alt="user1"
                        width="60" />
                </div>
            </div>
            <div>
                <h4 class="fw-semibold">Hi, <span class="text-dark">Teacher</span>
                </h4>
                <span>Cheers and Happy Activities</span>
            </div>
        </div>
    </div>
    <div class="d-flex">
        <div class="col-8 card-body border-0 shadow-md rounded">
            <h4 class="m-3 fw-bolder fs-6">
                Countries Represented
            </h4>
            <div id="vmap" style="margin:0 auto;width:100%;height:500px;"></div>
        </div>
        <div class="card-body col-4 ms-2 shadow-md border-0 d-flex flex-col ">
            <h2 class="m-3  fw-bolder fs-6">Summary</h2>
            <div class="m-4">
                <h4 class="fw-semibold fs-5">2</h4>
                <p class="fw-semibold">Enrolled Students</p>
            </div>
            <div class="m-4">
                <h3 class="fw-semibold fs-5">2</h3>
                <p class="fw-semibold">Sessions</p>
            </div>
            <div class="m-4">
                <h3 class="fw-semibold fs-5">2</h3>
                <p class="fw-semibold">Case Studies</p>
            </div>
            <div class="m-4">
                <h3 class="fw-semibold fs-5">2</h3>
                <p class="fw-semibold">All Comments</p>
            </div>
        </div>
    </div>
    <br>
    <div class="d-flex">
        <div class="col-md-6 col-lg-6 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <h5 class="card-title fw-bolder fs-6">Frameworks & Models</h5>
                    <canvas id="myChart" aria-label="chart" role="img"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 d-flex align-items-stretch ms-2">
            <div class="card w-100">
                <div class="card-body">
                    <h5 class="card-title fw-bolder fs-6">Sectors</h5>
                    <canvas id="myChart1" aria-label="chart" role="img"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
