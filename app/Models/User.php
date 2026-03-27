<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    protected $guarded = [];

    protected function casts(): array
    {

        return [
            'password' => 'hashed'
        ];
    }
}
