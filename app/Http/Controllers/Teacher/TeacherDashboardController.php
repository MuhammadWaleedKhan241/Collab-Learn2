<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\AddSession;
use App\Models\Casestudy as ModelsCasestudy;
use App\Models\Comment;
use App\Models\Teacher\CaseStudy;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TeacherDashboardController  extends Controller
{
    public function show()
    {
        $student_count = 0;
        $casestudy_count = 0;
        $comment_count = 0;
        $students = AddSession::query()->withCount(['student'])->where('teacher_id', Auth::user()->id)->get();

        foreach ($students as $student) {
            $student_count += $student->student_count;
        }
        $sessions = AddSession::query()->where('teacher_id', Auth::user()->id)->count();
        $case_studies = AddSession::query()->withCount(['casestudies'])->where('teacher_id', Auth::user()->id)->get();

        foreach ($case_studies as $case_study) {
            $casestudy_count += $case_study->casestudies_count;
        }
        $comments = AddSession::query()->withCount(['comments'])->where('teacher_id', Auth::user()->id)->get();

        foreach ($comments as $comment) {
            $comment_count += $comment->comments_count;
        }

        return view('teacher-dashboard', [
            'students' => $student_count,
            'sessions' => $sessions,
            'case_studies' => $casestudy_count,
            'comments' => $comment_count
        ]);
    }

    public function sessionDashboard($id)
    {
        $session = AddSession::find($id);
        if (null == $session) {
            abort(404);
        }
        $students = User::query()->where('session_code', $session->sessioncode)->count();
        $sessions = 1;
        $case_studies = CaseStudy::query()->where('session_id', $session->id)->count();
        $comments = Comment::query()->where('session_id', $session->id)->count();
        return view('teacher-dashboard', [
            'students' => $students,
            'sessions' => $sessions,
            'case_studies' => $case_studies,
            'comments' => $comments
        ]);
    }
    public function graph_countries()
    {
        $selected_countries = [];
        $casestudy_countries = AddSession::query()
            ->with('casestudies') // Eager load the casestudies relationship
            ->where('teacher_id', Auth::user()->id)
            ->get();
        // ->pluck('casestudies.country');

        foreach ($casestudy_countries as $key => $session) {
            foreach ($session->casestudies as $case_study) {
                if ($case_study->country) {
                    $selected_countries[] = $case_study->country;
                }
            }
        }

        $filePath = public_path('countries.json');

        // Check if the file exists
        if (file_exists($filePath)) {
            // Read the contents of the file
            $jsonContent = file_get_contents($filePath);

            // Parse the JSON data into a PHP array
            $countries = json_decode($jsonContent, true);

            // Return the countries array
            return response()->json(['countries' => $countries, 'selected_countries' => $selected_countries]);
        } else {
            // File not found, return an empty array or handle the error as needed
            return [];
        }
        // $countries =  CaseStudy::query()->where('country', '!=', null)->get();
        // return response()->json(['countries' => $countries]);
    }

    public function about()
    {
        return view('teacher.pages.about');
    }
    public function help()
    {
        return view('teacher.pages.help');
    }
    public function contact()
    {
        return view('teacher.pages.contact');
    }
}
