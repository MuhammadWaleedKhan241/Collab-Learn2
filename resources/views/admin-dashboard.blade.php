@extends('layouts.admin.admin-master')
@section('content')
    @include('layouts.partials.common.dashbord-content',[
        'students' => $students,
            'sessions' => $sessions,
            'case_studies' => $case_studies,
            'comments' => $comments

    ])
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
            url: '{{ route("admin.countries") }}',
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                console.log(res); // Verify the response
                countries = res.countries; // Assign the response data to the countries variable
                selectedCountries = res.selected_countries;
                console.log(selectedCountries);

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
