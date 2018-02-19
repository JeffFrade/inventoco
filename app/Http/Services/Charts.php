<?php

namespace InvOco\Http\Services;

use InvOco\Repositories\EquipmentsRepository;
use InvOco\Repositories\OccurrencesRepository;
use InvOco\Support\Chart as SupChart;

class Charts extends SupChart
{
    private $equipmentsRepository;
    private $occurrencesRepository;
    private $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    public function __construct(EquipmentsRepository $equipmentsRepository, OccurrencesRepository $occurrencesRepository)
    {
        $this->equipmentsRepository = $equipmentsRepository;
        $this->occurrencesRepository = $occurrencesRepository;
    }

    public function occurencesChart()
    {
        $dataset = $this->createDataset(trans('occurrences.occurrences'), $this->occurrencesRepository->countByMonths());
        return $this->createChart(trans('occurrences.occurrences'), 'line', ['width' => 400, 'height' => 100], $this->months, $dataset);
    }

    public function equipmentsChart()
    {
        $dataset = $this->createDataset(trans('inventory.equipments'), $this->equipmentsRepository->countByMonths());
        return $this->createChart(trans('inventory.equipments'), 'line', ['width' => 400, 'height' => 100], $this->months, $dataset);
    }
}