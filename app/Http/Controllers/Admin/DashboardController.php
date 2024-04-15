<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddSession;
use App\Models\Comment;
use App\Models\Teacher\CaseStudy;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $students = User::query()->where('session_code', '!=', null)->count();
        $sessions = AddSession::query()->count();
        $case_studies = CaseStudy::query()->count();
        $comments = Comment::query()->count();
        return view('admin-dashboard', [
            'students' => $students,
            'sessions' => $sessions,
            'case_studies' => $case_studies,
            'comments' => $comments
        ]);
    }

    public function graph_countries()
    {
        $selected_countries =  CaseStudy::query()->whereNotNull('country')->get()->pluck('country');

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
}
