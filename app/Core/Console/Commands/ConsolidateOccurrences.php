<?php

namespace InvOco\Core\Console\Commands;

use Illuminate\Console\Command;
use InvOco\Domains\Consolidate\Services\ConsolidateOccurrencesProcessService;

class ConsolidateOccurrences extends Command
{
    /**
     * @var string
     */
    protected $signature = 'consolidate:occurrences';
    /**
     * @var string
     */
    protected $description = 'Consolidate Occurrences';

    private $service;

    public function __construct(ConsolidateOccurrencesProcessService $service)
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