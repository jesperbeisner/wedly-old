<?php

declare(strict_types=1);

namespace App\Rules;

use App\Repository\UserRepository;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

final readonly class RegisterEmailRule implements ValidationRule
{
    public function __construct(
        private UserRepository $userRepository,
    ) {
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!is_string($value)) {
            $fail('validation.email_invalid')->translate();

            return;
        }

        if (null !== $this->userRepository->findByEmail($value)) {
            $fail('validation.email_double')->translate(['value' => $value]);
        }
    }
}
