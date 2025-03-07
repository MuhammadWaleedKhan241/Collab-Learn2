<?php

namespace App\Http\Controllers\Student\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Teacher\AddSession;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('student.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $session = AddSession::query()->where('sessioncode', $request->session_code)->first();
        if (!$session) {
            throw ValidationException::withMessages([
                'session_code' => 'session code may not exists',
            ]);
        }
        $user = User::where('email', $request->email)->whereNull('session_code')->first();
        if ($user) {
            $user->session_code = $request->session_code;
            $user->save();
        }
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->route('student.casestudy');
        // return redirect()->intended(RouteServiceProvider::HOME);
    }
    // public function authenticate(): void
    // {
    // $this->ensureIsNotRate  Limited();
    //     if (!Auth::guard('web')->attempt($this->only('sessioncode','email', 'password'), $this->boolean('remember'))) {
    //         RateLimiter::hit($this->throttleKey());

    //         throw ValidationException::withMessages([
    //             'email' => trans('auth.failed'),
    //         ]);
    //     }

    //     RateLimiter::clear($this->throttleKey());
    // }

    /**
     * Destroy an authenticated session.
     */
    // public function destroy(Request $request): RedirectResponse
    // {
    //     Auth::guard('web')->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/');
    // }


    // public function destroy(Request $request): RedirectResponse
    // {
    //     // $request->validateWithBag('userDeletion', [
    //     //     'password' => ['required', 'current_password'],
    //     // ]);

    //     $user = $request->user();

    //     Auth::logout();

    //     $user->delete();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return Redirect::to('/');
    // }
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('/');
    }
}
