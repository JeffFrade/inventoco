<?php
/**
 * Created by PhpStorm.
 * User: jefferson.frade
 * Date: 12/01/2018
 * Time: 21:52
 */

namespace InvOco\Repositories;


abstract class AbstractRepository
{
    protected $model;

    public function count()
    {
        return $this->model->count();
    }
}