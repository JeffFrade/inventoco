<?php
/**
 * Created by PhpStorm.
 * UserController: jefferson.frade
 * Date: 23/12/2017
 * Time: 13:04
 */

namespace InvOco\Charts;

class Chart
{
    private $dataTable;

    private $types = [
        'date',
        'number',
        'string',
        'datetime',
        'timeofday',
        'boolean',
    ];

    public function mountChart(array $chartArray, $dataTable)
    {
        /*$this->dataTable = $dataTable;

        foreach ($chartArray as $item => $key) {
            $dataTable = app($this->types[$item])->__invoke($key, $dataTable);
        }

        return $dataTable;*/
    }
}