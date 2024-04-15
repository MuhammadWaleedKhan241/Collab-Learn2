@extends('layouts.admin.admin-master')
@push('page-level-style')
@endpush
@section('content')
    <div class="container-fluid">
        @include('common.Alerts.flash-messages')
        <div class="col-12">
            <div class="p-4">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title fw- bolder">Sessions</h5>
                    <a href="{{ route('admin.add-session') }}" type="button" class="btn btn-outline-success">
                        Add
                        Session </a>
                </div>
                <div class="card shadow-none mt-9 mb-0">
                    <div class="table-responsive">
                        <table class="table text-nowrap align-middle mb-0 gap-3">
                            <thead>
                                <tr>
                                    <th class="fs-4 fw-bolder">Year</th>
                                    <th class="fs-4 fw-bolder">Code</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="text-dark ">
                                @foreach ($data as $record)
                                    <tr>
                                        <td>{{ $record->year }}</td>
                                        <td>{{ $record->sessioncode }}</td>
                                        {{-- <td><a href="{{ isset($session) ? route('add_resources.store', ['session_Id' => $session->id]) : '#' }}"
                                                type="button" class="btn btn-outline-secondary ">Resources</a></td> --}}
                                        {{-- <td><a href="{{ route('add_resources.store', ['session_Id' => $session->id]) }}"
                                                type="button" class="btn btn-outline-secondary ">Resources</a></td> --}}
                                        <td><a href="{{ route('admin.resource', $record->id) }}" type="button"
                                                class="btn btn-outline-secondary ">Resources</a></td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('page-level-script')
@endpush
