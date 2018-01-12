<?php

namespace InvOco\Http\Services;

use InvOco\Repositories\EquipmentsRepository;

class Metrics
{
    private $equipmentsRepository;

    public function __construct(EquipmentsRepository $equipmentsRepository)
    {
        $this->equipmentsRepository = $equipmentsRepository;
    }

    public function countEquipments()
    {
        return $this->equipmentsRepository->countEquipments();
    }
}