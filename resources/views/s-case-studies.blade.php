@extends('student.layouts.master')

@section('content')
<div class="card">
    @include('common.Alerts.flash-messages')
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title">My Readings</h5>
        <a href="{{route('student.casestudy-create')}}" class="btn btn-outline-success end-0 me-2 "> Add New Reading</a>
      </div>

    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-none mt-9 mb-0">
                    <div class="table-responsive">
                        <table class="table text-nowrap align-middle mb-0">
                            <thead>
                                <tr>
                                    <th class="fs-4 fw-bolder">Title</th>
                                    <th class="fs-4 fw-bolder">Session </th>
                                    <th class="fs-4 fw-bolder">Attach File</th>
                                    <th class="fs-4 fw-bolder">Status</th>
                                    <th class="fs-4 fw-bolder">Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="text-dark ">

                                <div class="container">
                                    @foreach ($data as $record)
                                    <tr>
                                        <td>{{ $record->title }}</td>
                                        <td>{{ $record->session->sessioncode }}</td>
                                        <td><a href="{{ asset(('assets/files/casestudy/'.$record->file)) }}">{{ $record->file }}</a></td>
                                        <td class="text-info fw-bold">Approved</td>
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
    </div>
</div>

@endsection
