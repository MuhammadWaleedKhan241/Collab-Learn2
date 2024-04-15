@extends('teacher.layouts.master')
@section('content')
    <p class="fs-6 fw-bolder">Readings</p>
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none mt-9 mb-0">
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
                                        <td><a href="{{ asset(('assets/files/casestudy/'.$casestudy->file)) }}">{{ $casestudy->file }}</a></td>
                                        <td>
                                            <h5><b>{{ $casestudy->user?->username }}</b></h5>
                                        </td>
                                        <td>
                                            <a href="{{ route('teacher.comments', $casestudy->id) }}"
                                                class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots-fill" viewBox="0 0 16 16">
                                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"></path>
                                                </svg>
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
    </div>
@endsection
