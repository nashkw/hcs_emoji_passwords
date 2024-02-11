<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\RoundOneAttempt;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;

class RememberDetailsController extends Controller
{
    /**
     * Display the page.
     */
    public function create(): Response
    {
        return Inertia::render('Remember');
    }

    /**
     * Handle an incoming request.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $user = $request->user();
        $data['correct'] = $user->username == $data['username'] && $user->unhashed_password == $data['password'];
        $data['user_id'] = $user->id;

        RoundOneAttempt::create($data);

        if ($data['correct']) {
            return redirect()->intended(RouteServiceProvider::HOME);
        } else {
            throw ValidationException::withMessages([
                'username' => trans('auth.failed'),
            ]);
        }
    }
}
