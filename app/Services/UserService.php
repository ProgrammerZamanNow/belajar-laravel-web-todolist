<?php

namespace App\Services;

interface UserService
{
    function login(string $email, string $password): bool;
}
