<?php

namespace InvOco\Domains\Consolidate\Services;

use InvOco\Repositories\ConsolidateEquipmentRepository;

class ConsolidateEquipmentsProcessService
{
    public function __invoke()
    {
        $this->consolidate();
        dump("Ok");
    }

    private function consolidate()
    {

    }
}