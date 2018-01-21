<?php

namespace InvOco\Http\Services;

use InvOco\Repositories\EquipmentsRepository;
use InvOco\Repositories\OccurrencesRepository;
use InvOco\Services\Chart;

class Charts
{
    private $chart;
    private $equipmentsRepository;
    private $occurrencesRepository;
    private $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    public function __construct(Chart $chart, EquipmentsRepository $equipmentsRepository, OccurrencesRepository $occurrencesRepository)
    {
        $this->equipmentsRepository = $equipmentsRepository;
        $this->occurrencesRepository = $occurrencesRepository;
        $this->chart = $chart;
    }

    public function occurencesChart()
    {
        $dataset = $this->chart->dataset(trans('occurrences.occurrences'), $this->occurrencesRepository->countByMonths());
        return $this->chart->createChart(trans('occurrences.occurrences'), 'line', ['width' => 400, 'height' => 100], $this->months, $dataset);
    }

    public function equipmentsChart()
    {
        $dataset = $this->chart->dataset(trans('inventory.equipments'), $this->equipmentsRepository->countByMonths());
        return $this->chart->createChart(trans('inventory.equipments'), 'line', ['width' => 400, 'height' => 100], $this->months, $dataset);
    }
}