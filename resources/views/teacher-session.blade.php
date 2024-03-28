@extends('teacher.layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title fw-semibold">Sessions</h5>
                        <a href="{{ route('teacher.addsession') }}" type="button" class="btn btn-outline-success">
                            Add Session
                        </a>
                    </div>
                    <div class="card shadow-none mt-9 mb-0">
                        <div class="table-responsive">
                            <table class="table text-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th class="ps-0 fs-4 fw-bolder">Year</th>
                                        <th class="fw-bolder fs-4">Code</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="text-dark">
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="border-0 ps-0 text-truncate">
                                                <h5>{{ $item->year }}</h5>
                                                <!-- Assuming 'year' is a field in your database -->
                                            </td>
                                            <td class="border-0">
                                                <h5>{{ $item->sessioncode }}</h5>
                                                <!-- Assuming 'code' is a field in your database -->
                                            </td>
                                            <td>
                                                <a href="{{ route('teacher.session.casestudy', $item->id) }}" type="button"
                                                    class="btn btn-outline-success">Case Studies</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('teacher.view_resources', $item->id) }}" type="button"
                                                    class="btn btn-outline-success">Resources</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('teacher.dashboard') }}" type="button"
                                                    class="btn btn-outline-success">Dashboard</a>
                                            </td>
                                            <td>
                                                <a type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal1">Collaborator</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bolder fs-5">Collaborator E-mail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Enter Email Address"
                            aria-label="First name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Add
                        Collaborator</button>
                </div>
            </div>
        </div>
    </div>
@endsection
