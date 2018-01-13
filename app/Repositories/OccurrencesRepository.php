<?php

namespace InvOco\Repositories;

use InvOco\Occurrences;
use Carbon\Carbon;

class OccurrencesRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new Occurrences();
    }

    public function countByMonths()
    {
        $data = [];

        for ($i = 1; $i <= 12; $i++) {
            $data[] = $this->model->whereMonth('updated_at', $i)->count();
        }

        return $data;
    }
}
