@extends('teacher.layouts.master')
@section('content')
    <div class="col-12">
        <div class="d-flex align-items-center gap-4 mb-4">
            <div class="position-relative">
                <div class=" border-2 border-primary rounded-circle">
                    @if (auth()->user()->profile_image)
                    <img src={{asset('assets/files/teacher/profile/'.auth()->user()->profile_image) }} class="rounded-circle"
                        width="60" alt="">
                    @else
                    <img src="{{ asset('images/profile/user-1.jpg') }}" class="rounded-circle m-1" alt="user1"
                        width="60" />

                    @endif

                </div>
            </div>
            <div>
                <h4 class="fw-semibold">Hello <span class="text-dark">{{ auth()->user()->username }}</span>
                </h4>
                 <span class="fw-bold">Welcome to your dashboard</span>
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
                <p class="fw-semibold">Readings</p>
            </div>
            <div class="m-4">
                <h3 class="fw-semibold fs-5">{{ $comments }}</h3>
                <p class="fw-semibold">All Comments</p>
            </div>
        </div>
    </div>
    <br>
    {{-- <div class="d-flex">
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
    </div> --}}
@endsection
@push('page-level-script')
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.world.js') }}"></script>

<script type="text/javascript">
    var countries = '';
    var selectedCountries = [];
    $(document).ready(function () {
        // Fetch country data using AJAX
        $.ajax({
            url: '{{ route("teacher.countries") }}',
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                // Verify the response
                countries = res.countries; // Assign the response data to the countries variable
                selectedCountries = res.selected_countries;


                // Initialize the map after fetching the data
                initializeMap();
            },
            error: function (xhr, status, error) {
                console.error("Error fetching country data:", error);
            }
        });

        function initializeMap() {
            $("#vmap").vectorMap({
                map: 'world_en',
                backgroundColor: '#fff',
                borderColor: '#fff',
                color: '#c8eeff',
                hoverOpacity: 0.7,
                selectedColor: '#0071a4',
                enableZoom: true,
                enableDrag: true,
                showTooltip: true,
                normalizeFunction: 'polynomial',
                onLabelShow: function (event, label, code) {
                    code = code.toUpperCase();
                    console.log(code);
                    country_name = countries[code];
                    label.html('<strong>' + country_name + '</strong>');
                },
                selectedRegions: selectedCountries // Set selected countries
            });
        }

    });

</script>
@endpush
