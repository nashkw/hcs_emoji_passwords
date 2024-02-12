<?php

namespace App\Http\Controllers\GroupA;

use App\Http\Controllers\Controller;
use App\Models\RoundOneAttempt;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;

class GroupARecallController extends Controller
{
    /**
     * Display the page.
     */
    public function create(): Response
    {
        return Inertia::render('GroupA/RoundOne/Remember');
    }

    /**
     * Handle an incoming request.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
        ]);

        $user = $request->user();
        $data['correct'] = $user->username == $data['username'] && $user->unhashed_password == $data['password'];
        $data['user_id'] = $user->id;

        RoundOneAttempt::create($data);

        if ($data['correct']) {
            return redirect()->intended(route('a.complete1'));
        } else {
            throw ValidationException::withMessages([
                'username' => trans('auth.failed'),
            ]);
        }
    }
}
