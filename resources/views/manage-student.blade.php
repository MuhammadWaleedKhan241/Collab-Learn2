@extends('layouts.admin.admin-master')
@section('content')
<div class="container-fluid">
    @include('common.Alerts.flash-messages')
    <div class="widget-content searchable-container list">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title">Manage Students</h5>
                <a href="{{route('admin.managestudent_create')}}" class="btn btn-outline-success end-0 me-2 "> Add New
                    Student</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table search-table align-middle text-nowrap">
                        <thead class="header-item">
                            <th>Name</th>
                            <th>Session</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $record)
                                <tr class="search-items">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="user-meta-info">
                                                    <h6 class="user-name " data-name="Emma Adams">
                                                        {{ $record->username }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="usr-email-addr" data-email="adams@mail.com">
                                            @if (!empty($record->session_code))
                                                {{ $record->session_code }}
                                            @else
                                                Not enrolled
                                            @endif
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-btn">
                                            <a href="{{ route('admin.edit.student', ['id' => $record->id]) }}"
                                                class="text-info edit">
                                                <i class="ti ti-edit fs-5 btn btn-outline-success"></i>
                                            </a>
                                            <a href="{{ route('admin.delete.student', ['id' => $record->id]) }}"
                                                class="text-dark delete ms-2 ">
                                                <i class="ti ti-trash fs-5 btn btn-outline-danger"></i>
                                            </a>
                                        </div>
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


@endsection
