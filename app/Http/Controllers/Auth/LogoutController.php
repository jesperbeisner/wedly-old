<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;
use RuntimeException;

final readonly class LogoutController
{
    public function __construct(
        private Guard $guard,
    ) {
    }

    public function logout(): RedirectResponse
    {
        if (!$this->guard instanceof SessionGuard) {
            throw new RuntimeException('Why no SessionGuard?!');
        }

        $this->guard->logout();

        return to_route('index');
    }
}
