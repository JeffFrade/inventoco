<?php

namespace InvOco\Repositories\Collections\Consolidate\ConsolidateEquipments;

use Jenssegers\Mongodb\Eloquent\Model;

class ConsolidateEquipments extends Model
{
    protected $connection = 'consolidate';
    protected $collection = 'consolidate_equipments';
    protected static $unguarded = true;
}