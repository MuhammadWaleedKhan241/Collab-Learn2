@extends('layouts.admin.admin-master')
@section('content')

<div class="container-fluid">
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">Student</a> -->
                <a href="{{ route('admin.managesession') }}" class="btn btn-outline-success round-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                </a>
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Add Resource
                </button>
            </div>
        </nav>
    </div>

    <div class="card shadow-none mt-9 mb-0">
        <div class="table-responsive">
            <table class="table text-nowrap align-middle mb-0 gap-3">
                <tbody class="text-dark ">
                    <table class="table text-nowrap align-middle mb-0 gap-3">
                        <thead>
                            <tr>
                                <th class="fs-4 fw-bolder">File Title</th>
                                <th class="fs-4 fw-bolder">File Name</th>
                                <th class="fs-4 fw-bolder">Added on</th>
                                <th class="fs-4 fw-bolder">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            @foreach ($data as $resource)
                            <tr>
                                <td>{{ $resource->title }}</td>
                                <td> <a href="{{ asset(('assets/files/resources/'.$resource->file)) }}">{{ $resource->file }}</a></td>
                                <td>{{ $resource->created_at }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('admin.edit.resource', ['id' => $resource->id]) }}"
                                            class="btn btn-outline-success me-2">Edit</a>
                                        {{-- <form
                                                    action="{{ route('admin.delete.resource', ['id' => $resource->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        </form> --}}
                                        <a href="{{ route('admin.delete.resource', ['id' => $resource->id]) }}"
                                            class="btn btn-outline-danger me-2">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </tbody>
            </table>
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
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                    @endif
                    <form action="{{ route('add.resources.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="session_id" value="{{ $session_id }}">
                        <div class="mb-3">
                            <label for="title" class="form-label fs-4">File Title</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="File" class="form-label fs-4">Add File</label>
                            <input class="form-control" type="file" name="file" id="File">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>




@endsection
