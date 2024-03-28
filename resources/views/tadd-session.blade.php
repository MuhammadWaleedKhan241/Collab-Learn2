@extends('teacher.layouts.master')
@section('content')
    <h1 class="fs-7 fw-bolder">New Session</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif
    <div class="container mt-3 ">
        <div class="row justify-between align-items-center">

            <form method="post" action="{{ route('teacher.session-store') }}"
                class="row g-3 col-12 m-auto bg-white rounded p-4">
                @csrf
                <div class="col-md-6 mb-3">
                    <label for="sessioncode" class="form-label fw-bolder fs-3">Session Code</label>
                    <input type="number" class="form-control" name="sessioncode" id="sessioncode"
                        value="{{ $session_code }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Attribute1" class="form-label fw-bolder fs-3">Attribute 1</label>
                    <input type="text" class="form-control" name="attribute1" id="Attribute1">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Attribute2" class="form-label fw-bolder fs-3">Attribute 2</label>
                    <input type="text" class="form-control" name="attribute2" id="Attribute2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Attribute3" class="form-label fw-bolder fs-3">Attribute 3</label>
                    <input type="text" class="form-control" name="attribute3" id="Attribute3">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Attribute4" class="form-label fw-bolder fs-3">Attribute 4</label>
                    <input type="text" class="form-control" name="attribute4" id="Attribute4">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Attribute5" class="form-label fw-bolder fs-3">Attribute 5</label>
                    <input type="text" class="form-control" name="attribute5" id="Attribute5">
                </div>
                <div class="col-2 d-flex">
                    <button type="submit" class="btn btn-outline-success mt-3 me-2">Submit</button>
                    {{-- <button type="button" class="btn btn-outline-danger mt-3">Cancel</button> --}}
                </div>
            </form>

        </div>
    </div>
@endsection
