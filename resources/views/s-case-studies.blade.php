@extends('student.layouts.master')

@section('content')
    <p class=" position-absolute mt-2 fs-6 fw-bolder "> My Case Studies</p>
    <button type="button" class="btn btn-outline-success position-absolute end-0 me-2 " data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
        Add New Case Study
    </button>
    <div class="card">
        <div class="d-flex justify-content-end">
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row d-flex">
                                <div class="mb-4">
                                    <h2 class="fs-4 fw font-semibold">Submit Case study</h2>
                                </div>
                                <form action="{{ route('student.submit.casestudy') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="session_id" value="{{ $sessions->id }}">
                                    <div class="col-12 mb-3 form-floating-input">
                                        <input type="text" class="form-control" name="title" placeholder="Title">
                                    </div>

                                    <div class="row">
                                        <div class="col-6 mb-3">

                                            <label type="text" value="{{ $sessions->attribute1 }}"
                                                disabled>Country</label>
                                            <select class="form-select" name="country" aria-label="Default select example">
                                                <option selected>Select Country</option>
                                                <option value="pakistan">Pakistan</option>
                                                <option value="afganistan">Afganistan</option>
                                                <option value="india">India</option>
                                            </select>
                                        </div>

                                        <div class="col-6 mb-3">

                                            <label type="text">{{ $sessions->attribute1 }}</label>
                                            <input type="text" value="" name="attribute1" class="form-control"
                                                placeholder="sector">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label type="text">{{ $sessions->attribute2 }}</label>
                                            <input type="text" class="form-control" value="" name="attribute2"
                                                placeholder="sector">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label type="text">{{ $sessions->attribute3 }}</label>
                                            <input type="text" class="form-control" value="" name="attribute3"
                                                placeholder="sector">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label type="text">{{ $sessions->attribute4 }}</label>
                                            <input type="text" class="form-control" value="" name="attribute4"
                                                placeholder="sector">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label type="text">{{ $sessions->attribute5 }}</label>
                                            <input type="text" class="form-control" value="" name="attribute5"
                                                placeholder="sector">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Attach
                                                    file</label>
                                                <input class="form-control" type="file" name="file" id="formFile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-outline-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none mt-9 mb-0">
                <div class="table-responsive">
                    <table class="table text-nowrap align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="fs-4 fw-bolder">Title</th>
                                <th class="fs-4 fw-bolder">Session </th>
                                <th class="fs-4 fw-bolder">Attach File</th>
                                <th class="fs-4 fw-bolder">Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-dark ">

                            <div class="container">
                                @foreach ($data as $records)
                                    <tr>
                                        <td>{{ $records->title }}</td>
                                        <td>{{ $records->session->sessioncode }}</td>
                                        <td>{{ $records->file }}</td>
                                        <td>Approved</td>
                                    </tr>
                                @endforeach
                            </div>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
