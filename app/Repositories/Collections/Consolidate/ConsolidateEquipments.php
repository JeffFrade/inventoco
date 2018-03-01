<?php

namespace InvOco\Repositories\Collections\Consolidate;

use Jenssegers\Mongodb\Eloquent\Model;

class ConsolidateEquipments extends Model
{
    protected $connection = 'consolidate';
    protected $collection = 'consolidate_equipments';
    protected static $unguarded = true;

    public function createMany(array $data)
    {
        return $this->raw(function ($collection) use ($data) {
            return $collection->insertMany($data);
        });
    }
}