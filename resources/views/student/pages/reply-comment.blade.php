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

        <div class="d-flex align-items-center gap-4">
            {{-- <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>2252</div>
         <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>2</div> --}}
        </div>

        <div class="position-relative">
            <div class="p-4 rounded-2 bg-light mb-3">
                <div class="d-flex align-items-center gap-3">
                    <img src={{ asset('images/profile/user-2.jpg') }} alt="" class="rounded-circle" width="33"
                        height="33">
                    @if ($comment->is_teacher == 1)
                    <h6 class="fw-semibold mb-0 fs-4">{{ $comment->teacher?->username }}</h6>
                    @elseif($comment->is_admin == 1)
                    <h6 class="fw-semibold mb-0 fs-4">{{ $comment->admin?->email }}</h6>
                    @else
                    <h6 class="fw-semibold mb-0 fs-4">{{ $comment->user?->username }}</h6>
                    @endif
                    <div class="d-flex align-items-center fs-2 ms-auto">
                        <i class="ti ti-point text-dark"></i>
                        {{ \Carbon\Carbon::parse($comment->created_at)->format('D, M j') }}
                    </div>
                </div>
                <p class="my-3">{{ $comment->comment }}
                </p>
            </div>
        </div>

        <form action="{{ route('student.casestudy.comment_reply.reply-submit') }}" method="POST">
            <h4 class="mb-4 fw-semibold">Reply Comment</h4>
            @csrf
            <input type="hidden" value="{{ $comment->id }}" name="comment_id">
            <input type="hidden" value="{{ $comment->casestudy_id }}" name="casestudy_id">
            <div>
                <textarea class="form-control  @error('comment') is-invalid @enderror mb-4" rows="5" name="comment"></textarea>
                @error('comment')
                <span class="invalid-feedback mb-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


                <button type="submit" class="btn btn-outline-success ">Reply</button>
            </div>
        </form>
    </div>
</div>
@endsection
