<?php

namespace App\Http\Controllers\GroupA;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\RoundTwoAttempt;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class GroupAAuthenticationController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): Response
    {
        return Inertia::render('GroupA/RoundTwo/Login');
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
        $data['is_group_a'] = true;
        RoundTwoAttempt::create($data);

        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('a.complete2'));
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
