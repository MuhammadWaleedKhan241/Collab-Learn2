@extends('student.layouts.master')
@section('content')
<style>
    :root{
        --bs-font-sans-serif: system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans","Liberation Sans",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    }
</style>
    <p class="fs-7 fw-bolder">Enter Feedback</p>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif
    <div class="container mt-3 ">
        <div class="row justify-between align-items-center">
            <form action="{{ route('feedback.store') }}" method="POST" class="row g-3 col-12 m-auto bg-white rounded p-4">
                @csrf
                <div class="col-md-6 mb-3">
                    <label class="form-label d-block fs-4 fw-normal">Gender:</label>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="" value="male">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Male
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="" value="female">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label d-block fs-4 fw-normal">Age:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="age" id="age" value="21-25">
                        <label class="form-check-label" for="flexRadioDefault2">
                            21-25
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="age" id="age" value="26-30">
                        <label class="form-check-label" for="flexRadioDefault2">
                            26-30
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="age" id="age" value="31-35">
                        <label class="form-check-label" for="flexRadioDefault2">
                            31-35
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="age" id="age" value="36-40">
                        <label class="form-check-label" for="flexRadioDefault2">
                            36-40
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="age" id="age" value="41-50">
                        <label class="form-check-label" for="flexRadioDefault2">
                            41-50
                        </label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fs-4 fw-normal">Number of years of professional
                        Experience:</label>
                    <input type="number" class="form-control" name="experience" id="experience" value="">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fs-4 fw-normal">Number of years of formal
                        education (including
                        your current
                        Master’s
                        programme):</label>
                    <input type="number" class="form-control" name="educatuionYear" id="education_year"
                        value="educationYear">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fs-4 fw-normal">Sector of experience (in case of more than
                        one, please list all
                        sectors in
                        which you have worked previously):</label>
                    <textarea type="text" class="form-control" name="sectorexperiance" id="sector_experiance"></textarea>
                </div>
                <div class="col-md-6 mb-3 ">
                    <label class="form-label fs-4 fw-normal">Which geographical location are you
                        referring
                        to you in your
                        case study?
                    </label>
                    <input type="text" class="form-control" name="geolocation" id="geo_location" value="">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label d-block fs-4 fw-normal">Have you ever used your background
                        experience in a
                        classroom learning
                        experience before? </label>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="useexperiencebefore"
                            id="use_experience_before" value="Yes">
                        <label class="form-check-label" for="useExpYes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="useexperiencebefore"
                            id="use_experience_before" value="No">
                        <label class="form-check-label" for="useExpNo">
                            No
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="useexperiencebefore"
                            id="use_experience_before" value="Maybe">
                        <label class="form-check-label" for="useExpMaybe">
                            Maybe
                        </label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label d-block fs-4 fw-normal">Did you find it useful?</label>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="useful" id="useful" value="Yes">
                        <label class="form-check-label" for="usefulYes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="useful" id="useful" value="No">
                        <label class="form-check-label" for="usefulNo">
                            No
                        </label>
                    </div>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="useful" id="useful" value="Maybe">
                        <label class="form-check-label" for="usefulMaybe">
                            Maybe
                        </label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label d-block fs-4 fw-normal">Did using your own background
                        experience help you understand Strategic Management better?</label>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="ownbackexpunderstandingstratmang"
                            id="own_back_exp_understanding_strat_mang" value="Yes">
                        <label class="form-check-label" for="OwnBackYes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ownbackexpunderstandingstratmang"
                            id="own_back_exp_understanding_strat_mang" value="No">
                        <label class="form-check-label" for="OwnBackNo">
                            No
                        </label>
                    </div>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="ownbackexpunderstandingstratmang"
                            id="own_back_exp_understanding_strat_mang" value="Maybe">
                        <label class="form-check-label" for="OwnBackMaybe">
                            Maybe
                        </label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label d-block fs-4 fw-normal">Did this session improve your
                        understanding of topics
                        related to
                        Strategic Management?</label>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="understandingsm"
                            id="understanding_strategic_managment">
                        <label class="form-check-label" for="understandingYes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="understandingsm"
                            id="understanding_strategic_managment" value="No">
                        <label class="form-check-label" for="understandingNo">
                            No
                        </label>
                    </div>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="understandingsm"
                            id="understanding_strategic_managment" value="Maybe">
                        <label class="form-check-label" for="understandingMaybe">
                            Maybe
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label d-block fs-4 fw-normal" for="explnyourlearn">Would you
                        like
                        to build your
                        experience into your learning on the course more? Please give reasons.</label>
                    <textarea rows="4" type="text" class="form-control" name="explainyourlearn" id="explain_your_learn"></textarea>
                </div>
                <div class="col-12">
                    <label class="form-label d-block fs-4 fw-normal" for="BackExpInClass">Did you like
                        talking about
                        your background experience in the classroom?</label>
                    <textarea rows="4" type="text" class="form-control" name="backexpinclass" id="back_experience_in_class"></textarea>
                </div>
                <div class="col-12">
                    <label class="form-label d-block fs-4 fw-normal" for="LearnFromOther">Did you
                        learn
                        from other
                        people and their background experiences? Is so, how and if not, why?</label>
                    <textarea rows="4" type="text" class="form-control" name="learnfromother" id="learn_from_other"></textarea>
                </div>
                <div class="col-12">
                    <label class="form-label d-block fs-4 fw-normal" for="ImprovedInFuture">Which
                        aspect(s) do you think
                        could be improved for the future?</label>
                    <textarea rows="4" type="text" class="form-control" name="improvedinfuture" id="improved_in_future"></textarea>
                </div>
                <div class="col-12">
                    <label class="form-label d-block fs-4 fw-normal" for="AnyOtherComment">Any other
                        comments you would
                        like to make?</label>
                    <textarea rows="4" class="form-control" name="anyothercomment" id="any_other_comment"></textarea>
                </div>
                <div class="col-12">
                    <div class="form-check position-relative">
                        <input class="form-check-input" type="checkbox" name="permission" id="permission">
                        <label class="form-check-label fw-semibold" for="flexCheckChecked">
                            Your responses and submitted cases will be used anonymously for research and
                            publication purposes. Please tick here for your consent for your comments and
                            data to be used
                            anonymously
                        </label>
                        <button type="submit" class="btn btn-outline-success">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
