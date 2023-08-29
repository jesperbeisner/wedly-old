<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Rules\RegisterEmailRule;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

final class SignUpFormRequest extends FormRequest
{
    protected $redirectRoute = 'register';

    /**
     * @return array<string, array<int, string|ValidationRule>>
     */
    public function rules(RegisterEmailRule $registerEmailRule): array
    {
        return [
            'email' => ['required', 'email', $registerEmailRule],
            'name' => ['required', 'min:2'],
            'password' => ['required', 'min:10'],
        ];
    }
}
