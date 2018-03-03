<?php
/**
 * Created by PhpStorm.
 * User: jefferson.frade
 * Date: 03/03/2018
 * Time: 13:48
 */

namespace InvOco\Domains\Consolidate\Services;


use Carbon\Carbon;
use InvOco\Domains\Consolidate\Transformers\OccurrencesConfigData;
use InvOco\Repositories\Collections\Consolidate\ConsolidateOccurrences;
use InvOco\Repositories\Models\Occurrences;

class ConsolidateOccurrencesProcessService
{
    private $consolidatedList = [];

    public function __invoke()
    {
        $this->consolidate();

        app(ConsolidateOccurrences::class)->createMany($this->consolidatedList);
    }

    private function consolidate()
    {
        $occurrences = (new Occurrences())->whereDate('created_at', Carbon::today())->get();

        $document = new OccurrencesConfigData();

        $document->__set('totalOccurrences', $occurrences->count());
        $document->__set('equipments', $occurrences->unique('serial_number')->count());

        $this->consolidatedList[] = $document->mountData();
    }
}