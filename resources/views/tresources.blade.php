@extends('teacher.layouts.master')
@section('content')
<div class="container-fluid">

    <div class="card shadow-none mt-9 mb-0">
        <div class="card-header">
            Session: {{ $session->year }} -
            {{ $session->sessioncode }}

            <button type="button" class="btn btn-outline-success float-end" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Add Resource
                </button>
        </div>
        <div class="card-body">
            <table class="table text-nowrap align-middle mb-0 gap-3">
                <thead>
                    <tr>
                        <th class="fs-4 fw-bolder">Title</th>
                        <th class="fs-4 fw-bolder">Name</th>
                        <th class="fs-4 fw-bolder">Added on</th>
                        <th class="fs-4 fw-bolder">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-dark">
                    @foreach ($resources as $record)
                    <tr>
                        <td>{{ $record->title }}</td>
                        <td>  <a href="{{ asset(('assets/files/resources/'.$record->file)) }}">{{ $record->file }}</a></td>
                        <td>{{ $record->created_at }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('edit_resource',  $record->id) }}"
                                    class="btn btn-info me-2">Edit</a>
                                <form action="{{ route('delete_resource', ['id' => $record->id]) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bolder" id="exampleModalLabel">New Resource
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form method="POST" action="{{ route('add_resources') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $session->id }}" name="session_id">
                    <div class="row">
                        <div class="mb-3">
                            <label for="title" class="form-label fs-4">File Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                id="title" name="title" value="{{old('title')}}" required>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label fs-4">Add File</label>
                            <input class="form-control @error('file') is-invalid @enderror" type="file"
                                id="formFile" name="file" required>
                            @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-success"
                            data-bs-dismiss="modal">Add</button>
                        <button type="button" class="btn btn-outline-danger"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
