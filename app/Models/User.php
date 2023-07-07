<?php

declare(strict_types=1);

namespace App\Models;

use BadMethodCallException;
use Database\Factories\UserFactory;
use DateTime;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property DateTime $created_at
 * @property DateTime $updated_at
 *
 * @method static UserFactory factory($count = null, $state = [])
 */
class User extends Model implements Authenticatable
{
    use HasFactory;

    /** @var string */
    protected $primaryKey = 'uuid';

    /** @var string */
    protected $keyType = 'string';

    /** @var bool */
    public $incrementing = false;

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

    public function getRememberToken()
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
