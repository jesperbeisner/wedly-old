<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Requests\SignUpFormRequest;
use Illuminate\Contracts\View\View;

final readonly class SignUpController
{
    public function index(): View
    {
        return view('auth.sign-up');
    }

    public function signUp(SignUpFormRequest $signUpFormRequest): View
    {
        return view('auth.sign-up');
    }
}
