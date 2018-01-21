<?php

namespace InvOco\Http\Controllers;

use Illuminate\Http\Request;
use InvOco\Http\Services\Charts;
use InvOco\Http\Services\Metrics;

class DashboardController extends Controller
{
    /**
     * @var Metrics
     * @var Charts
     */
    private $metrics;
    private $charts;

    /**
     * DashboardController constructor.
     * @param Metrics $metrics
     * @param Charts $charts
     */
    public function __construct(Metrics $metrics, Charts $charts)
    {
        $this->metrics = $metrics;
        $this->charts = $charts;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('dashboard', with([
            'equipmentsCount' => $this->metrics->countEquipments(),
            'occurrencesCount' => $this->metrics->countOccurrences(),
            'reportsCount' => $this->metrics->countOccurrences(),
            'usersCount' => $this->metrics->countUsers(),
            'yearOccurrences' => $this->metrics->countOccurrencesYear(),
            'yearEquipments' => $this->metrics->countEquipmentsYear(),
            'occurrenceChart' => $this->charts->occurencesChart(),
            'equipmentChart' => $this->charts->equipmentsChart(),
        ]));
    }
}
