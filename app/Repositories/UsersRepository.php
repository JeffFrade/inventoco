<?php

namespace InvOco\Repositories;

use InvOco\User;

class UsersRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new User();
    }
}
