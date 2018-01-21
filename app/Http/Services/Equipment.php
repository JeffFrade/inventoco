<?php

namespace InvOco\Http\Services;

use InvOco\Repositories\EquipmentsRepository;

class Equipment
{
    private $equipment;

    public function __construct(EquipmentsRepository $equipmentsRepository)
    {
        $this->equipment = $equipmentsRepository;
    }

    public function findEquipment($codebar)
    {
        $equipment = $this->equipment->customFind('codebar', $codebar);

        return $equipment;
    }
}
