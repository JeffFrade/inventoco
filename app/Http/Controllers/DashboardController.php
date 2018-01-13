<?php

namespace InvOco\Http\Controllers;

use Illuminate\Http\Request;
use InvOco\Http\Services\Metrics;

class DashboardController extends Controller
{
    private $metrics;

    public function __construct(Metrics $metrics)
    {
        $this->metrics = $metrics;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Variables:

        return view('dashboard', with([
            'equipmentsCount' => $this->metrics->countEquipments(),
            'occurrencesCount' => $this->metrics->countOccurrences(),
            'reportsCount' => $this->metrics->countOccurrences(),
            'usersCount' => $this->metrics->countUsers(),
        ]));
    }
}
