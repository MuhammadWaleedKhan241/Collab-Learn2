<div class="container-fluid">
    <div class="col-12">
        <div class="d-flex align-items-center gap-4 mb-4">
            <div class="position-relative">
                <div class=" border-2 border-primary rounded-circle">

                    <img src="{{ asset('images/profile/user-1.jpg') }}" class="rounded-circle m-1" alt="user1"
                        width="60" />
                </div>
            </div>
            <div>
                <h4 class="fw-semibold">Hello, <span class="text-dark">Admin</span>
                </h4>
                <span>Welcome to your dashboard</span>
            </div>
        </div>
    </div>
    <div class="d-flex">
        <div class="col-8 card-body border-0 shadow-md rounded">
            <h4 class="m-3 fw-bolder">
                Countries Represented
            </h4>
            <div id="vmap" style="margin:0 auto;width:100%;height:500px;"></div>
        </div>
        <div class="card-body col-4 ms-2 shadow-md border-0 d-flex flex-col ">
            <h4 class="m-3  fw-bolder">Summary</h4>
            <div class="m-4">
                <h4 class="fw-semibold fs-5">{{ $students }}</h4>
                <p class="fw-semibold">Enrolled Students</p>
            </div>
            <div class="m-4">
                <h3 class="fw-semibold fs-5">{{ $sessions }}</h3>
                <p class="fw-semibold">Sessions</p>
            </div>
            <div class="m-4">
                <h3 class="fw-semibold fs-5">{{ $case_studies }}</h3>
                <p class="fw-semibold">Case Studies</p>
            </div>
            <div class="m-4">
                <h3 class="fw-semibold fs-5">{{ $comments }}</h3>
                <p class="fw-semibold">All Comments</p>
            </div>
        </div>
    </div>
    <br>
    {{-- <div class="d-flex">
        <div class="col-md-6 col-lg-6  d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body shadow-md  border-0">
                    <h5 class="card-title fw-bolder fs-6">Frameworks & Models</h5>
                    <canvas id="myChart" aria-label="chart" role="img"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 d-flex border-0 align-items-stretch ms-2">
            <div class="card w-100">
                <div class="card-body shadow-md border-0">
                    <h5 class="card-title fw-bolder fs-6">Sectors</h5>
                    <canvas id="myChart1" aria-label="chart" role="img"></canvas>
                </div>
            </div>
        </div>
    </div> --}}
</div>
