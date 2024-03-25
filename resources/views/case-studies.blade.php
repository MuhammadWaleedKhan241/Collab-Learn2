@extends('layouts.admin.admin-master')
@push('page-level-style')
@endpush
@section('content')
    <div class="container-fluid">
        <p class="fs-6 fw-bolder">Case Studies</p>
        <div class=" shadow-none mt-9 mb-0">
            <div class="table-responsive">
                <table class="table text-nowrap align-middle mb-0">
                    <thead>
                        <tr>
                            <th class="ps-0 fs-4 fw-semibold">Session</th>
                            <th class="fw-semibold fs-4">Title</th>
                            <th class="fw-semibold fs-4">File</th>
                            <th class="fw-semibold fs-4">By</th>
                            <th class="fw-semibold fs-4">Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span>2023</span>
                            </td>
                            <td>
                                <span> Language,political discourse Language</span>
                            </td>
                            <td>
                                <a href="#">Download file</a>
                            </td>
                            <td>
                                <h5><b>Smith</b></h5>
                            </td>
                            <td>
                                <a href="{{ route('admin.comment') }}" class="btn btn-outline-success"><i
                                        class="bi bi-chat-square-dots fs-5"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('page-level-script')
@endpush
