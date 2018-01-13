<?php

namespace InvOco\Http\Services;

use InvOco\Repositories\EquipmentsRepository;
use InvOco\Repositories\OccurrencesRepository;
use InvOco\Repositories\ReportsRepository;
use InvOco\Repositories\UsersRepository;

class Metrics
{
    private $equipmentsRepository;
    private $occurrencesRepository;
    private $reportsRepository;
    private $usersRepository;

    public function __construct(EquipmentsRepository $equipmentsRepository, OccurrencesRepository $occurrencesRepository, ReportsRepository $reportsRepository, UsersRepository $usersRepository)
    {
        $this->equipmentsRepository = $equipmentsRepository;
        $this->occurrencesRepository = $occurrencesRepository;
        $this->reportsRepository = $reportsRepository;
        $this->usersRepository = $usersRepository;
    }

    public function countEquipments()
    {
        return $this->equipmentsRepository->count();
    }

    public function countOccurrences()
    {
        return $this->occurrencesRepository->count();
    }

    public function countReports()
    {
        return $this->reportsRepository->count();
    }

    public function countUsers()
    {
        return $this->usersRepository->count();
    }
}
