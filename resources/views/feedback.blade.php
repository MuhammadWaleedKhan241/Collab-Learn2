@extends('layouts.admin.admin-master')
@section('content')
<h1 class="fs-6 fw-bolder">Feedback</h1>

                <div class="container mt-3 ">
                    <div class="row justify-between align-items-center">
                        <form class="row g-3 col-12 m-auto bg-white rounded p-4">
                            <div>
                                <table class="table text-nowrap align-middle mb-1 table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="fs-4 fw-bolder">Student Name</th>
                                            <th class="fs-4 fw-bolder">Gender</th>
                                            <th class="fs-4 fw-bolder">Age</th>
                                            <th class="fs-4 fw-bolder">Experience</th>
                                            <th class="fs-4 fw-bolder">Education Year</th>
                                            <th class="fs-4 fw-bolder">Geo Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $record)
                                            <tr>
                                                <td>{{ $record->user?->username }}</td>
                                                <td>{{ $record->gender }}</td>
                                                <td>{{ $record->age }}</td>
                                                <td>{{ $record->experience }}</td>
                                                <td>{{ $record->educatuionYear }}</td>
                                                <td>{{ $record->geolocation }}</td>
                                                <th><a
                                                        href="{{ route('admin.feedback-detail', ['id' => $record->id]) }}"><i
                                                            class="fa fa-comments"></i></a></th>
                                                {{-- <th> <a class="btn btn-outline-success"
                                                        href="{{ route('admin.feedback-details' . $record->id) }}"><i
                                                            class="fa fa-comments" x></i></a>
                                                </th> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>

@endsection
