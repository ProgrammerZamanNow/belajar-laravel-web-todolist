<?php

namespace App\Services\Impl;

use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class UserServiceImpl implements UserService
{

    function login(string $email, string $password): bool
    {
        return Auth::attempt([
            "email" => $email,
            "password" => $password
        ]);
    }
}
