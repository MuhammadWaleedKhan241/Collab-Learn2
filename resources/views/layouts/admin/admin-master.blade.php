<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>Collab Learn</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="NettaAdSoka" />
    <meta name="author" content="" />
    <meta name="keywords" content="NettaAdSoka" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/favicon.ico') }}" />
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href={{ asset('css/style.min.css') }} />
    <link href={{ asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css') }} rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css') }}">

    <link href={{ asset('//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css') }} />

    <link rel="stylesheet" href={{ asset('https://unpkg.com/leaflet/dist/leaflet.css') }} />
    <link rel="stylesheet" href={{ asset('css/style.min.css') }}>


</head>

<body>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->

        @include('layouts.admin.sidebar')

        <div class="body-wrapper">


            {{-- navbar --}}
            @include('layouts.admin.navbar')

            @yield('content')
        </div>
    </div>

    <script src={{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}></script>

    <script src={{ asset('libs/jquery/dist/jquery.min.js') }}></script>

    <script src={{ asset('libs/simplebar/dist/simplebar.min.js') }}></script>



    <script src={{ asset('js/app.min.js') }}></script>

    {{-- <script src={{asset('js/app.init.js')}}></script> --}}

    {{-- <script src={{asset('js/app-style-switcher.js')}}></script> --}}

    <script src={{ asset('js/sidebarmenu.js') }}></script>
    {{-- <script src={{asset('assets/js/custom.js')}}></script> --}}
    <script src={{ asset('js/custom.js') }}></script>

    <script src={{ asset('js/dashboard5.js') }}></script>
    <script src={{ asset('js/chart.js') }}></script>
    <script src={{ asset('js/custom1.js') }}></script>
    <script src={{ asset('js/chart2.js') }}></script>
    <script src={{ asset('js/custom2.js') }}></script>




    <script src="{{ asset('https://code.jquery.com/jquery-latest.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.world.js') }}"></script>

    <script type="text/javascript">
        var countries = '';

        function getCountryData() {
            // $.ajax({
            //     url: 'countries.json',
            //     type: 'get',
            //     success: function (res) {
            //         countries = JSON.parse(res);
            //     }
            // });
            $.ajax({
                url: "countries.json",
                type: 'get',
                dataType: 'json', // Specify the data type
                success: function(res) {
                    console.log(res); // Verify the response
                    countries = res; // Assign the response directly
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching country data:", error);
                }
            });
        }

        getCountryData();

        $(document).ready(function() {
            $("#vmap").vectorMap({
                map: 'world_en',
                backgroundColor: '#215196',
                borderColor: '#38a3a5',
                color: '#f6fff8',
                hoverOpacity: 0.7,
                selectedColor: '#38a3a5',
                enableZoom: true,
                enableDrag: true,
                showTooltip: true,
                normalizeFunction: 'polynomial',

                onLabelShow: function(event, label, code) {
                    code = code.toUpperCase();
                    country_name = countries[code];
                    label.html('<strong>' + country_name + '</strong>');
                }
            });
        });
    </script>
</body>

</html>
