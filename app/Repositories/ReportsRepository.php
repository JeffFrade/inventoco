<?php

namespace InvOco\Repositories;

use InvOco\Report;

class ReportsRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new Report();
    }
}
