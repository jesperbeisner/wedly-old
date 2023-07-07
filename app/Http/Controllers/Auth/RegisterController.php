<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Requests\RegisterFormRequest;
use Illuminate\Contracts\View\View;

final readonly class RegisterController
{
    public function index(): View
    {
        return view('auth.register');
    }

    public function register(RegisterFormRequest $registerFormRequest): View
    {
        return view('auth.register');
    }
}
