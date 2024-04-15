@extends('student.layouts.master')
@section('content')


<div class="card">
    <div class="card-header">
        <h5 class="card-title">My Reading</h5>
    </div>
    <div class="card-body">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
        @endif

        <form action="{{ route('student.submit.casestudy') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="session_id" value="{{ $sessions->id }}">
            <div class="col-12 mb-3 form-floating-input">
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{old('title')}}">
            </div>

            <div class="row">
                @if ($sessions->is_country == '1')

                <div class="col-6 mb-3">


                    <label type="text" disabled>Country</label>
                    <select class="form-select" name="country" aria-label="Default select example">
                        <option selected>Select Country</option>
                        @foreach ($countries as $key=> $country)
                        <option value="{{$key}}">{{ $country }}</option>

                        @endforeach
                    </select>
                </div>
                @endif
                @if ($sessions->attribute1)

                <div class="col-6 mb-3">
                    <label type="text">{{ $sessions->attribute1 }}</label>
                    <input type="text"  name="attribute1" class="form-control" value="{{old('attribute1')}}">
                </div>
                @endif
                @if ($sessions->attribute2)
                <div class="col-6 mb-3">
                    <label type="text">{{ $sessions->attribute2 }}</label>
                    <input type="text" class="form-control"  name="attribute2" value="{{old('attribute2')}}" >
                </div>
                @endif

                @if ($sessions->attribute3)

                <div class="col-6 mb-3">
                    <label type="text">{{ $sessions->attribute3 }}</label>
                    <input type="text" class="form-control"  name="attribute3" value="{{old('attribute3')}}" >
                </div>
                @endif

                @if ($sessions->attribute4)

                <div class="col-6 mb-3">
                    <label type="text">{{ $sessions->attribute4 }}</label>
                    <input type="text" class="form-control"  name="attribute4" value="{{old('attribute4')}}" >
                </div>
                @endif
                @if ($sessions->attribute5)
                <div class="col-6 mb-3">
                    <label type="text">{{ $sessions->attribute5 }}</label>
                    <input type="text" class="form-control"  name="attribute5" value="{{old('attribute5')}}" >
                </div>

                @endif
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
@endsection
