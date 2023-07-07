<?php

declare(strict_types=1);

namespace App\Service;

use App\Models\User;
use Ramsey\Uuid\Uuid;

final readonly class UserService
{
    public static function create(string $name, string $email, string $password): User
    {
        $user = new User();

        $user->uuid = Uuid::uuid7()->toString();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;

        return $user;
    }
}
