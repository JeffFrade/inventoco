<?php

namespace InvOco\Domains\Consolidate\Transformers;

use Carbon\Carbon;
use MongoDB\BSON\UTCDateTime;

class OccurrencesConfigData
{
    private $totalOccurrences = 0;
    private $equipments = 0;

    public function __set($name, $value)
    {
        $this->$name += $value;
    }

    public function mountData()
    {
        $document = [
            "total_occurrences" => $this->totalOccurrences,
            "equipments" => $this->equipments,
            "reference_day" => Carbon::today()->toDateString(),
            "updated_at" => new UTCDateTime(Carbon::now()->timestamp * 1000),
            "created_at" => new UTCDateTime(Carbon::now()->timestamp * 1000),
        ];
        return $document ?? [];
    }
}