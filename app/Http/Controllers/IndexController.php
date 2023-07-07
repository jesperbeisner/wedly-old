<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repository\UserRepository;
use Illuminate\Contracts\View\View;

final readonly class IndexController
{
    public function __construct(
        private UserRepository $userRepository,
    ) {
    }

    public function index(): View
    {
        return view('index.index');
    }
}
