@extends('layouts.admin.admin-master')
@push('page-level-style')
@endpush
@section('content')
    <div class="container-fluid bg-light">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <div class="container mt-3 ">
            <div class="row justify-between align-items-center">

                <form action="{{ route('admin.session-store') }}" method="post"
                    class="row g-3 col-12 m-auto bg-white rounded p-4">
                    @csrf
                    <h1 class="fs-7 fw-bold">Add New Session</h1>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bolder">Session Code </label>
                        <input type="number" class="form-control" name="sessioncode" id="sessioncode"
                            value="{{ $sessioncode }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bolder">Attribute 1</label>
                        <input type="text" class="form-control" name="attribute1" id="attribute1">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bolder">Attribute 2 </label>
                        <input type="text" class="form-control" name="attribute2" id="attribute2">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bolder">Attribute 3 </label>
                        <input type="text" class="form-control" name="attribute3" id="attribute3">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bolder">Attribute 4 </label>
                        <input type="text" class="form-control" name="attribute4" id="attribute4">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bolder">Attribute 5 </label>
                        <input type="text" class="form-control" name="attribute5" id="attribute5">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="is_country" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Country Field
                        </label>
                      </div>
                    <div class="col-2 d-flex">
                        <button type="submit" class="btn btn-outline-success mt-3 me-2 ">Submit</button>
                        <button type="button" class="btn btn-outline-danger mt-3 ">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('page-level-script')
@endpush
