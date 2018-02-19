<?php

namespace InvOco\Repositories;

use InvOco\Repositories\Models\User;

class UsersRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new User();
    }
}
