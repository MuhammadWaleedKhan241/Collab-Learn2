@extends('teacher.layouts.master')
@section('content')

@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger">{{ $error }}</div>
@endforeach
@endif
<form action="{{ route('update_resource', $data->id) }}" method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="d-flex">
        <div class="col-md-6 me-2  ">
            <label for="validationTooltip01" class="form-label">title</label>
            <input type="text" class="form-control" id="validationTooltip01" name="title" value="{{ $data->title }}">
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip02" class="form-label">File</label>
            <input type="file" class="form-control" id="validationTooltip02" name="file">
        {{-- </div> {{ $data->file }} </div> --}}
        </div>
    </div>

    <div class="col-12 modal-footer">
        <button class="btn btn-outline-success" type="submit" data-bs-dismiss="modal">Update</button>
        <button class="btn btn-outline-danger" type="submit" data-bs-dismiss="modal">Cancel</button>
    </div>
</form>
@endsection
