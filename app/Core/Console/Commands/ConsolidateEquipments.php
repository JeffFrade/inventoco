<?php

namespace InvOco\Core\Console\Commands;

use Illuminate\Console\Command;
use InvOco\Domains\Consolidate\Services\ConsolidateEquipmentsProcessService;

class ConsolidateEquipments extends Command
{
    /**
     * @var string
     */
    protected $signature = 'consolidate:equipments';
    /**
     * @var string
     */
    protected $description = 'Consolidate Equipments';

    private $service;

    public function __construct(ConsolidateEquipmentsProcessService $service)
    {
        parent::__construct();
        $this->service = $service;
    }
    public function handle()
    {
        $this->service->__invoke();
        $this->info('Executed!');
    }
}