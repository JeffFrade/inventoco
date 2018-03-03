<?php

namespace InvOco\Repositories\Collections\Consolidate;

use Jenssegers\Mongodb\Eloquent\Model;

class ConsolidateOccurrences extends Model
{
    protected $connection = 'consolidate';
    protected $collection = 'consolidate_occurrences';
    protected static $unguarded = true;

    public function createMany(array $data)
    {
        return $this->raw(function ($collection) use ($data) {
            return $collection->insertMany($data);
        });
    }
}