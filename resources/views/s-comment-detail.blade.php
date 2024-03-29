@extends('student.layouts.master')
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <a href="{{ route('student.casestudy') }}" class="btn btn-outline-success round-10">
                        <i class="bi bi-arrow-left fs-5"> </i><b>Case Study</b></a>
                    </ol>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card rounded-2 overflow-hidden">
        <div class="card-body p-4">
            <h2 class="fs-7 fw-semibold my-4">{{ $casestudy->title }}</h2>
            <div class="d-flex align-items-center gap-4">
                {{-- <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>2252</div>
         <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>2</div> --}}
            </div>
            <div class="d-flex align-items-center gap-3 mb-4 mt-7 pt-8">
                <h4 class="mb-0 fw-bolder">Comments</h4>
                <span class="badge bg-light-success text-primary fs-4 fw-semibold px-6 py-8 rounded">1</span>
            </div>
            @foreach ($comments as $comment)
                <div class="position-relative">
                    <div class="p-4 rounded-2 bg-light mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <img src={{ asset('images/profile/user-2.jpg') }} alt="" class="rounded-circle"
                                width="33" height="33">
                            @if ($comment->is_teacher == 1)
                                <h6 class="fw-semibold mb-0 fs-4">{{ $comment->teacher?->username }}</h6>
                            @elseif($comment->is_admin == 1)
                                <h6 class="fw-semibold mb-0 fs-4">{{ $comment->admin?->email }}</h6>
                            @else
                                <h6 class="fw-semibold mb-0 fs-4">{{ $comment->user?->username }}</h6>
                            @endif
                            <div class="d-flex align-items-center fs-2 ms-auto"><i class="ti ti-point text-dark"></i>Sat,
                                Jan 14
                            </div>
                            <span class="p-1 bg-light-dark rounded-circle d-inline-block"></span>
                        </div>
                        <p class="my-3">{{ $comment->comment }}
                        </p>
                    </div>
                </div>
            @endforeach
            <h4 class="mb-4 fw-semibold">Post Comment</h4>
            <form action="{{ route('student.casestudy.comment-submit') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $casestudy->id }}" name="casestudy_id" id="">
                <div>
                    <textarea class="form-control mb-4" rows="5" name="comment"></textarea>
                    <button type="submit" class="btn btn-outline-success">Post Comment</button>
                </div>
            </form>
        </div>
    </div>
@endsection
