<?php

namespace InvOco\Repositories;

use InvOco\Equipment;

class EquipmentsRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new Equipment();
    }
}
