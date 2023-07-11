<?php

declare(strict_types=1);

namespace App\Helpers;

final readonly class InputHelper
{
    public static function border(bool $hasError, bool $hasOldValue): string
    {
        if ($hasError === true) {
            return 'border-red-500';
        }

        if ($hasOldValue === true) {
            return 'border-green-500';
        }

        return 'border-gray-300';
    }
}
