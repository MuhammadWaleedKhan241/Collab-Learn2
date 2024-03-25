<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Routing\Controller;

    
// class Controller extends BaseController

class ProfileController extends Controller
{
//    use AuthorizesRequests, ValidatesRequests;

   
    public function show()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }














    
     
    // public function edit(Request $request): View
    // {
    //     return view('profile.edit', [
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


    // public function show($id)
    // {
    //     // Fetch user data based on the provided $id
    //     $user = User::findOrFail($id);

    //     // Pass the user data to the profile view
    //     return view('profile.show', ['user' => $user]);
    // }

    // public function edit($id)
    // {
    //     // Fetch user data based on the provided $id
    //     $user = User::findOrFail($id);

    //     // Pass the user data to the edit profile view
    //     return view('profile.edit', ['user' => $user]);
    // }

    // public function update(Request $request, $id)
    // {
    //     // Validate the request data
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users,email,'.$id,
    //         // Add other fields you want to validate
    //     ]);

    //     // Find the user based on the provided $id
    //     $user = User::findOrFail($id);

    //     // Update user data with the validated request data
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     // Update other fields as needed

    //     // Save the updated user data
    //     $user->save();

    //     // Redirect the user back to their profile page
    //     return redirect()->route('profile.show', ['id' => $id])->with('success', 'Profile updated successfully.');
    // }    
}