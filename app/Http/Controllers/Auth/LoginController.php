<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use RuntimeException;

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
        if (!$this->guard instanceof SessionGuard) {
            throw new RuntimeException('Why no SessionGuard?!');
        }

        if ($this->guard->attempt(['email' => $loginFormRequest->getEmail(), 'password' => $loginFormRequest->getPassword()])) {
            $loginFormRequest->session()->regenerate();

            return to_route('home');
        }

        return to_route('login')->withErrors(['error' => 'Boom'])->onlyInput('email');
    }
}
