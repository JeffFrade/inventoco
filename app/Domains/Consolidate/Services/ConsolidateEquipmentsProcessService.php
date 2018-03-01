<?php

namespace InvOco\Domains\Consolidate\Services;

use Carbon\Carbon;
use InvOco\Domains\Consolidate\Transformers\EquipmentsConfigData;
use InvOco\Repositories\Collections\Consolidate\ConsolidateEquipments;
use InvOco\Repositories\Models\Equipment;

class ConsolidateEquipmentsProcessService
{
    private $consolidatedList = [];

    public function __invoke()
    {
        $this->consolidate();

        app(ConsolidateEquipments::class)->createMany($this->consolidatedList);
    }

    private function consolidate()
    {
        $equipments = (new Equipment())->whereDate('created_at', Carbon::today())->get();

        $document = new EquipmentsConfigData();

        $document->__set('totalEquipments', $equipments->count());

        $this->consolidatedList[] = $document->mountData();
    }
}