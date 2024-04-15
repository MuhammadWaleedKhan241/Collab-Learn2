@extends('student.layouts.master')
@section('content')
<style>
    .uploadfile{
        display: block;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        overflow: hidden;
        position: relative;
        border: 1px solid #000;
        cursor: ;


    }
    .uploadfile input{
        position: absolute;
        left: 0;
        top: 0;
        font-size: 100px;
    }
    .uploadfile img{
        position: relative;
        z-index: 5;
        pointer-events: none;
        object-fit: cover;
        height: 100%;
        width: 100%;
        background: #ccc;
    }
</style>
<div class="container-fluid">
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">My Profile</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body py-5">
            <div class="row ">
                <div class="col-lg-4 ">
                    <div class="ms-4">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                        <form method="post" action="{{route('student.profile.upload')}}" enctype="multipart/form-data">
                            @csrf
                        <span class="uploadfile ms-4">
                        @if ($user->profile_image)
                        <img src="{{ asset('assets/files/student/profile/'.$user->profile_image) }}" class="rounded-circle"
                            alt="">
                        @else
                        <img src="{{ asset('images/profile/user-1.jpg') }}" class="rounded-circle"
                            width="100" height="100" alt="">

                        @endif
                            <input type="file" id="wizard-picture" name="profile">
                        </span>
                        <button type="button" class="btn btn-light px-4 my-3" id="updateBtn">upload image</button>
                        <button class="btn btn-primary d-none ms-4" id="profile-update-btn">update</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">

                        <p><strong>Name:</strong> {{$user->username}} </p>
                        <p><strong>Email:</strong> {{$user->email}} </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('page-level-script')
<script>
    $(document).ready(function(){
    // Prepare the preview for profile picture

        $("#wizard-picture").change(function(){
            $('#profile-update-btn').removeClass('d-none').addClass('d-block');

        });
    });
</script>
<script>
    document.getElementById('updateBtn').addEventListener('click', function() {
      document.getElementById('wizard-picture').click();
    });
    </script>
@endpush
