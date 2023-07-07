<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

final readonly class LoginController
{
    public function __construct(
        private Guard $guard,
    ) {
    }

    public function index(): View
    {
        return view('auth.login');
    }

    public function login(LoginFormRequest $loginFormRequest): RedirectResponse
    {
        if ($this->guard->attempt($loginFormRequest->validated())) {
            $loginFormRequest->session()->regenerate();

            return to_route('home');
        }

        return to_route('login')->withErrors(['error' => 'Boom'])->onlyInput('email');
    }
}
