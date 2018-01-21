<?php

namespace InvOco\Repositories;

use InvOco\Equipment;

class EquipmentsRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new Equipment();
    }

    public function countByMonths()
    {
        $data = [];

        for ($i = 1; $i <= 12; $i++) {
            $data[] = $this->model->whereMonth('created_at', $i)->count();
        }

        return $data;
    }
}
