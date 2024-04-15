@extends('student.layouts.master')
@section('content')
    <p class="fs-6 fw-bolder"> Readings</p>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- <div class="card-body p-4"> -->
                <div class="d-flex justify-content-end">
                </div>
            </div>
            <div class="card shadow-none mt-9 mb-0">
                <div class="table-responsive">
                    <table class="table text-nowrap align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="fs-4 fw-bolder">Session</th>
                                <th class="fs-4 fw-bolder">Title </th>
                                <th class="fs-4 fw-bolder">File</th>
                                <th class="fs-4 fw-bolder">By</th>
                                <th class="fs-4 fw-bolder">Action</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-dark ">

                            <div class="container">
                                @foreach ($data as $record)
                                    <tr>
                                        <td>{{ $record->session?->sessioncode }}</td>
                                        <td>{{ $record->title }}</td>
                                        <td><a href="{{ asset(('assets/files/casestudy/'.$record->file)) }}">{{ $record->file }}</a></td>
                                        <td>{{ $record->user->username }}</td>

                                        <td>
                                            <a href="{{ route('student.casestudy.comment', $record->id) }}"
                                                class="btn btn-outline-success"><i class="bi bi-chat-square-dots fs-5"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </div>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
