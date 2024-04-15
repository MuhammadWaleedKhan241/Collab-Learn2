<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collab learn</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href={{ asset('css/style.css') }} />
    <style>
        body {
            background-color:var(--primary);
        }

        .h1 {
            font-size: 50px;
        }

        .card {
            width: 1000px;
            padding: 100px 0;
            margin: 0 auto;
        }

        .btn {
            margin: 100px 0 0 0;
            font-weight: bold;
            font-size: 40px;
            padding: 30px;
            /* background-color: rgb(38, 35, 209); */
            border: 0;

        }
    </style>
</head>

<body>

    <div class="card my-5 bg-light">
        <h1 class="text-center h1 text-white">Login As:</h1>
        <div class="d-flex justify-content-around ">
            {{-- <a href="{{route('admin.login')}}" class="btn btn-primary">Admin</a> --}}
            <a href="{{route('teacher.login')}}" class="btn btn-primary">Tutor</a>
            <a href="{{route('student.login')}}" class="btn btn-primary">Student</a>
        </div>
    </div>

</body>

</html>
