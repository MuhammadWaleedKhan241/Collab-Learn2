<?php

namespace App\Http\Controllers\Student\Auth;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Routing\Controller;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function show()
    {
        $user = Auth::user();
        return view('profile.student.edit', compact('user'));
    }

    public function uploadImage(Request $request)
    {

        $validatedData = $request->validate([

            'profile' => 'required|file|mimes:jpeg,jpg,png',
        ]);
        $user = User::find(Auth::user()->id);
        if ($request->hasFile('profile')) {
            $path = Image::image_upload($request->profile, 'student/profile');
        } else {
            $path = null;
        }
        $user->profile_image = $path;
        $user->save();
        return redirect()->route('student.profile.upload');
    }



    // public function edit(Request $request): View
    // {
    //     return view('profile.student.edit', [
    //         'user' => $request->user(),
    //     ]);
    // }

    /**
     * Update the user's profile information.
     */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }

    /**
     * Delete the user's account.
     */
    // public function destroy(Request $request): RedirectResponse
    // {
    //     $request->validateWithBag('userDeletion', [
    //         'password' => ['required', 'current_password'],
    //     ]);

    //     $user = $request->user();

    //     Auth::logout();

    //     $user->delete();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return Redirect::to('/');
    // }
}
