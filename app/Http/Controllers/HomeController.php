<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final readonly class HomeController
{
    public function home(): View
    {
        return view('home.home');
    }
}
