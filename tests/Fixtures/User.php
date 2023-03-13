<?php

declare(strict_types=1);

namespace Tests\Fixtures;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PreemStudio\BinaryUuid\Casts\Binary;

final class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $casts = [
        'uuid' => Binary::class,
    ];

    protected static function newFactory()
    {
        return UserFactory::new();
    }
}
