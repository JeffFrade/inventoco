<?php

namespace InvOco\Repositories;

use InvOco\Equipment;

class EquipmentsRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Equipment();
    }

    public function countEquipments()
    {
        return $this->model->count();
    }
}