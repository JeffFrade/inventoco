<?php

namespace InvOco\Repositories;

use InvOco\User;

class UserRepository
{
    public function login(string $user, string $password)
    {
        $user = (new User())->where([
            ['user' => $user],
            ['password' => $password],
        ])->get();

        if ($user == $user->user && $password == $user->password) {
            return true;
        }

        return false;
    }
}