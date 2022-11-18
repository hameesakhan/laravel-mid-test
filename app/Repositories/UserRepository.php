<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function find($name)
    {
        return User::where('name', $name)->firstOrFail();
    }
}
