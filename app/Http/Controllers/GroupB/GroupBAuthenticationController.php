<?php

namespace App\Http\Controllers\GroupB;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\RoundTwoAttempt;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class GroupBAuthenticationController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): Response
    {
        return Inertia::render('GroupB/RoundTwo/Login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $data = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
        ]);

        $user = User::firstWhere('username', $data['username']);
        if ($user) {
            $data['correct'] = $user->unhashed_password == $data['password'];
            $data['user_id'] = $user->id;
        } else {
            $data['correct'] = false;
            $data['user_id'] = null;
        }
        RoundTwoAttempt::create($data);

        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('b.complete2'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
