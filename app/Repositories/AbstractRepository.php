<?php

namespace InvOco\Repositories;


abstract class AbstractRepository
{
    protected $model;

    public function count()
    {
        return $this->model->count();
    }

    public function customFind(string $field, $value, string $operator = '=')
    {
        $query = $this->model->where($field, $operator, $value)->first();

        return $query;
    }
}
