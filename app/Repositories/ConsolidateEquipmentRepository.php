<?php

namespace InvOco\Repositories;

use InvOco\Repositories\Collections\Consolidate\ConsolidateEquipments\ConsolidateEquipments;

class ConsolidateEquipmentRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new ConsolidateEquipments();
    }
}
