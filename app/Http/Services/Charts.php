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

    public function __construct(Chart $chart, EquipmentsRepository $equipmentsRepository, OccurrencesRepository $occurrencesRepository)
    {
        $this->equipmentsRepository = $equipmentsRepository;
        $this->occurrencesRepository = $occurrencesRepository;
        $this->chart = $chart;
    }

    public function occurencesChart()
    {
        $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $dataset = $this->chart->dataset(trans('occurrences.occurrences'), 'rgba(0, 115, 183, 0.7)', 'rgba(0, 115, 183, 1)', $this->occurrencesRepository->countByMonths());
        return $this->chart->createChart(trans('occurrences.occurrences'), 'line', ['width' => 400, 'height' => 100], $labels, $dataset);
    }
}