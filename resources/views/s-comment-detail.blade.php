@extends('student.layouts.master')
@section('content')
<div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-12  d-flex justify-content-between">
                <a href="{{ route('student.casestudy') }}" class="btn btn-outline-success round-10">
                    <i class="bi bi-arrow-left fs-5"> </i><b>My Readings</b></a>

                    <button class="btn btn-outline-success" type="button" data-bs-toggle="modal"
                    data-bs-target="#exampleModal1">Resources
                </button>
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
            @if ($session->attribute1)
            <span class="badge text-bg-light"> {{ $session->attribute1 }}:</span>{{$casestudy->attribute1}}

            @endif
            @if ($session->attribute2)
            <span class="badge text-bg-light"> {{ $session->attribute2 }}:</span>{{$casestudy->attribute2}}

            @endif
            @if ($session->attribute3)
            <span class="badge text-bg-light"> {{ $session->attribute3 }}:</span>{{$casestudy->attribute3}}

            @endif
            @if ($session->attribute4)
            <span class="badge text-bg-light"> {{ $session->attribute4 }}:</span>{{$casestudy->attribute4}}

            @endif
            @if ($session->attribute5)
            <span class="badge text-bg-light"> {{ $session->attribute5 }}:</span>{{$casestudy->attribute5}}

            @endif



            {{-- <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>2252</div>
         <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>2</div> --}}
        </div>
        <div class="d-flex align-items-center gap-3 mb-4 mt-7 pt-8">
            <h4 class="mb-0 fw-bolder">Comments</h4>
            <span
                class="badge bg-light-success text-primary fs-4 fw-semibold px-6 py-8 rounded">{{ count($comments) }}</span>
        </div>


        @foreach ($comments as $comment)
        <div class="">
            <div class="p-4 rounded-2 bg-light mb-3">
                <div class="d-flex align-items-center gap-3">
                    @if ($comment->user?->profile_image)
                    @if ($comment->is_teacher == 0 && $comment->is_admin == 0)
                    <img src={{ asset('assets/files/student/profile/'.$comment->user?->profile_image)  }} alt=""
                        class="rounded-circle" width="33" height="33">
                    @endif
                    @else
                    <img src={{ asset('images/profile/user-2.jpg') }} alt="" class="rounded-circle" width="33"
                        height="33">

                    @endif
                    @if ($comment->is_teacher == 1)
                    @if ($comment->teacher?->profile_image)
                    <img src={{ asset('assets/files/teacher/profile/'.$comment->teacher?->profile_image)  }} alt=""
                    class="rounded-circle" width="33" height="33">
                    @else
                    <img src={{ asset('images/profile/user-2.jpg') }} alt="" class="rounded-circle" width="33"
                    height="33">
                    @endif
                    <h6 class="fw-semibold mb-0 fs-4">{{ $comment->teacher?->username }}</h6>
                    @elseif($comment->is_admin == 1)
                    <img src={{ asset('images/profile/user-2.jpg') }} alt="" class="rounded-circle" width="33"
                    height="33">
                    <h6 class="fw-semibold mb-0 fs-4">{{ $comment->admin?->email }}</h6>
                    @else
                    <h6 class="fw-semibold mb-0 fs-4">{{ $comment->user?->username }}</h6>
                    @endif
                    <div class="d-flex align-items-center fs-2 ms-auto">
                        <i class="ti ti-point text-dark"></i>
                        {{ \Carbon\Carbon::parse($comment->created_at)->format('D, M j, H:i:s') }}
                    </div>
                    {{-- <span class="p-1 bg-light-dark rounded-circle d-inline-block"></span> --}}
                </div>
                <p class="my-3">{{ $comment->comment }}
                </p>
                <div class="text-end">

                    <a href="{{route('student.casestudy.comment_reply',$comment->id)}}" class="btn btn-primary ">reply</a>
                </div>

            </div>
        </div>
                {{-- reply --}}
        @foreach ($comment->reply as $reply)
        <div class="position-relative ms-5">
            <div class="p-4 rounded-2 border-1 mb-3">
                <div class="d-flex align-items-center gap-3">
                    @if ($reply->user?->profile_image)
                    @if ($reply->is_teacher == 0 && $reply->is_admin == 0)
                    <img src={{ asset('assets/files/student/profile/'.$reply->user?->profile_image)  }} alt=""
                        class="rounded-circle" width="33" height="33">
                    @endif
                    @else
                    <img src={{ asset('images/profile/user-2.jpg') }} alt="" class="rounded-circle" width="33"
                        height="33">

                    @endif
                    @if ($reply->is_teacher == 1)
                    @if ($reply->teacher?->profile_image)
                    <img src={{ asset('assets/files/teacher/profile/'.$reply->teacher?->profile_image)  }} alt=""
                    class="rounded-circle" width="33" height="33">
                    @else
                    <img src={{ asset('images/profile/user-2.jpg') }} alt="" class="rounded-circle" width="33"
                    height="33">
                    @endif
                    <h6 class="fw-semibold mb-0 fs-4">{{ $reply->teacher?->username }}</h6>
                    @elseif($reply->is_admin == 1)
                    <img src={{ asset('images/profile/user-2.jpg') }} alt="" class="rounded-circle" width="33"
                    height="33">
                    <h6 class="fw-semibold mb-0 fs-4">{{ $reply->admin?->email }}</h6>
                    @else
                    <h6 class="fw-semibold mb-0 fs-4">{{ $reply->user?->username }}</h6>
                    @endif


                    <div class="d-flex align-items-center fs-2 ms-auto">
                        <i class="ti ti-point text-dark"></i>
                        {{ \Carbon\Carbon::parse($reply->created_at)->format('D, M j, H:i:s') }}
                    </div>
                    {{-- <span class="p-1 bg-light-dark rounded-circle d-inline-block"></span> --}}

                </div>
                <p class="my-3">{{ $reply->comment }}
                </p>
            </div>
        </div>

        @endforeach
        @endforeach
        <form action="{{ route('student.casestudy.comment-submit') }}" method="POST">
            <h4 class="mb-4 fw-semibold">Post Comment</h4>
            @csrf
            <input type="hidden" value="{{ $casestudy->id }}" name="casestudy_id" id="">
            <input type="hidden" value="{{ $casestudy->session_id }}" name="session_id" id="">
            <div>
                <textarea class="form-control mb-4" rows="5" name="comment"></textarea>
                <button type="submit" class="btn btn-outline-success">Post Comment</button>
            </div>
        </form>
    </div>
</div>
@include('common.Modal.resources')
@endsection
