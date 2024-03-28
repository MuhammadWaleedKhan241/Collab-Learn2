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
                            <th class="fs-4">Title</th>
                            <th class="fs-4">File</th>
                            <th class="fs-4">By</th>
                            <th class="fs-4">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark ">
                        @foreach ($casestudies as $item)
                            @foreach ($item->casestudies as $casestudy)
                                <tr>
                                    <td>
                                        <!-- <img src="assets/images/nft/g1.webp" class="rounded img-fluid me-2" width="50" alt="user" /> -->
                                        <span>{{ $item->sessioncode }}</span>
                                    </td>
                                    <td>
                                        <span>{{ $casestudy->title }}</span>
                                    </td>
                                    <td>
                                        <a href="#">{{ $casestudy->file }}</a>
                                    </td>
                                    <td>
                                        <h5><b>{{ $casestudy->user?->username }}</b></h5>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.comments', $casestudy->id) }}"
                                            class="btn btn-outline-success"><i class="bi bi-chat-square-dots fs-5"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('page-level-script')
@endpush
