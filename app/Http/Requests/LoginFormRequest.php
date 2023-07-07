<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use RuntimeException;

final class LoginFormRequest extends FormRequest
{
    /**
     * @return array<string, string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public function getEmail(): string
    {
        $email = $this->validated('email');

        if (!is_string($email)) {
            throw new RuntimeException('How did you call this before the request was validated?');
        }

        return $email;
    }

    public function getPassword(): string
    {
        $password = $this->validated('password');

        if (!is_string($password)) {
            throw new RuntimeException('How did you call this before the request was validated?');
        }

        return $password;
    }
}
