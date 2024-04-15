@extends('student.layouts.master')
@section('content')
<div class="card shadow-none">
    <div class="card-header">
        <h5 class="card-title">Help</h5>
    </div>
    <div class="card-body px-4 py-3">
        <div class="col-12">
            <div>
                <h5><span class="fw-bolder">Step 1:</span> Upload your draft from the ‘My Readings’ tab</h5>
                <img class="mt-4" src="{{asset('images/help-1.JPG')}}"  alt="step1"/>

            </div>
            <div class="mt-4">
                <h5><span class="fw-bolder">Step 2:</span> Go to the ‘All Readings’ tab and comment on others’ drafts</h5>
                <img class="mt-4" src="{{asset('images/help-2.JPG')}}"  alt="step1"/>

            </div>

        </div>
    </div>
</div>
@endsection
