<?php

namespace InvOco\Repositories;

use InvOco\Occurrences;

class OccurrencesRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new Occurrences();
    }
}
