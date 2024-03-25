@extends('layouts.admin.admin-master')
@push('page-level-style')
@endpush
@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <a href="{{ route('admin.casestudy') }}" class="btn btn-outline-success round-10">
                            <i class="bi bi-arrow-left fs-5"> </i><b>Case Study</b>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card rounded-2 overflow-hidden">
            <div class="card-body p-4">
                <h2 class="fs-7 fw-semibold my-4">Streaming video way before it was cool, go dark tomorrow</h2>
                <div class="d-flex align-items-center gap-4">
                    {{-- <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>2252</div>
          <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>2</div> --}}
                </div>
                <div class="d-flex align-items-center gap-3 mb-4 mt-7 pt-8">
                    <h4 class="mb-0 fw-bolder">Comments</h4>
                    <span class="badge bg-light-success text-primary fs-4 fw-semibold px-6 py-8 rounded">1</span>
                </div>
                <div class="position-relative">
                    <div class="p-4 rounded-2 bg-light mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <img src={{ asset('images/profile/user-2.jpg') }} alt="" class="rounded-circle"
                                width="33" height="33">
                            <h6 class="fw-semibold mb-0 fs-4">Don Russell</h6>
                            <div class="d-flex align-items-center fs-2 ms-auto"><i class="ti ti-point text-dark"></i>Sat,
                                Jan 14
                            </div>
                            <span class="p-1 bg-light-dark rounded-circle d-inline-block"></span>
                        </div>
                        <p class="my-3">Es do ujurus nejson imju azgudpi toceztep ji cocicoci bosawrop korze ta.
                            Casetlu udumej umocu wanaro webmos ijafa ud muli amja softoj ma pijum.
                        </p>
                    </div>
                </div>
                <h4 class="mb-4 fw-semibold">Post Comments</h4>
                <div>
                    <textarea class="form-control mb-4" rows="5"></textarea>
                    <button class="btn btn-outline-success">Post Comment</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('page-level-script')
@endpush
