<?php

namespace InvOco\Domains\Consolidate\Transformers;

use Carbon\Carbon;
use MongoDB\BSON\UTCDateTime;

class EquipmentsConfigData
{
    private $totalEquipments = 0;

    public function __set($name, $value)
    {
        $this->$name += $value;
    }

    public function mountData()
    {
        $document = [
            "total_equipments" => $this->totalEquipments,
            "reference_day" => Carbon::today()->toDateString(),
            "updated_at" => new UTCDateTime(Carbon::now()->timestamp * 1000),
            "created_at" => new UTCDateTime(Carbon::now()->timestamp * 1000),
        ];
        return $document ?? [];
    }
}