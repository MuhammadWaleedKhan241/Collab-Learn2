@extends('layouts.admin.admin-master')
@section('content')
<div class="container-fluid">
    <div class="d-flex flex-wrap justify-content-between gap-3 ">
        <div class="col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column  pb-0 ">
            <p class="fw-semibold fs-4"class="fw-semibold">Student Name</p>
            <p>{{ $data->user?->username }}</p>
            {{-- <p> {{ $data->student->name }}</p> --}}
            {{-- <p>{{$data->student ? $data->student->name : '---'}}</p> --}}
        </div>
        <div class="col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column  pb-0 ">
            <p class="fw-semibold fs-4">Gender</p>
            <p>{{ $data->gender }}</p>
        </div>
        <div class="col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column  pb-0 ">
            <p class="fw-semibold fs-4">Age</p>
            <p>{{ $data->age }}</p>
        </div>
        <div class="col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column  pb-0 ">
            <p class="fw-semibold fs-4">Number of years of professional experience:</p>
            <p> {{ $data->experience }} </p>
        </div>
        <div class="col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column">
            <p class="fw-semibold fs-4">Sector of experience :</p>
            <p class=" pfont">{{ $data->sectorexperiance }}</p>
        </div>
        <div class=" col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column ">
            <p class=" fw-semibold fs-4">Number of years of formal education: </p>
            <p class=" pfont">{{ $data->educatuionYear }}</p>
        </div>
        <div class=" col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column">
            <p class=" fw-semibold fs-4">Which geographical location are you referring to you in your case
                study?
            </p>
            <p>{{ $data->geolocation }}</p>
        </div>
        <div class=" col-11 col-sm-5 col-md-3 d-flex justify-content-between flex-column">
            <p class=" fw-semibold fs-4">Have you ever used your background experience in a classroom
                learning
                experience before?</p>
            <p>{{ $data->useexperiencebefore }}</p>
        </div>
        <div class=" col-11  col-md-3 d-flex justify-content-between flex-column">
            <p class="fw-semibold fs-4">Did you find it useful?</p>
            <p>{{ $data->useful }}</p>
        </div>
        <div class="col-11 d-flex justify-content-between flex-column">
            <p class="fw-semibold fs-4">Did using your own background experience help you understand
                Strategic
                Management better?</p>
            <p>{{ $data->understandingsm }}</p>
        </div>
        <div class="col-11 d-flex justify-content-between flex-column">
            <p class="fw-semibold fs-4">Did this session improve your understanding of topics related to
                Strategic
                Management?</p>
            <p>{{ $data->ownbackexpunderstandingstratmang }}</p>
        </div>

        <div class="col-11 d-flex justify-content-between flex-column">
            <p class="fw-semibold fs-4">Would you like to build your experience into your learning on the
                course
                more? Please give reasons</p>
            <p>{{ $data->explainyourlearn }}</p>
        </div>
        <div class="col-11 d-flex justify-content-between flex-column">
            <p class="fw-semibold fs-4">Did you like talking about your background experience in the
                classroom?</p>
            <p>{{ $data->backexpinclass }}</p>
        </div>
        <div class="col-11 d-flex justify-content-between flex-column">
            <p class="fw-semibold fs-4">Did you learn from other people and their background experiences? Is
                so,
                how and if not, why?</p>
            <p>{{ $data->learnfromother }}</p>
        </div>
        <div class="col-11 d-flex justify-content-between flex-column">
            <p class="fw-semibold fs-4">Which aspect(s) do you think could be improved for the future?</p>
            <p>{{ $data->improvedinfuture }}</p>
        </div>
        <div class="col-11 d-flex justify-content-between flex-column">
            <p class="fw-semibold fs-4">Any other comments you would like to make</p>
            <p>{{ $data->anyothercomment }}</p>
        </div>
    </div>
</div>
@endsection
