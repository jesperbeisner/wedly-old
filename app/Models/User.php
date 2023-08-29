<?php

declare(strict_types=1);

namespace App\Models;

use BadMethodCallException;
use Database\Factories\UserFactory;
use DateTime;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $email
 * @property DateTime|null $email_verified_at
 * @property string $password
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @method static UserFactory factory($count = null, $state = [])
 */
class User extends Model implements Authenticatable
{
    use HasFactory;

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthIdentifierName(): string
    {
        return 'email';
    }

    public function getAuthIdentifier(): string
    {
        return $this->email;
    }

    public function getAuthPassword(): string
    {
        return $this->password;
    }

    public function getRememberToken(): string
    {
        return '';
    }

    public function setRememberToken($value)
    {
        throw new BadMethodCallException('Method "setRememberToken" is not implemented.');
    }

    public function getRememberTokenName()
    {
        throw new BadMethodCallException('Method "getRememberTokenName" is not implemented.');
    }
}
