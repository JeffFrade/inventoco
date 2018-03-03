<?php

namespace InvOco\Repositories\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Occurrences extends Model
{
    use SoftDeletes;

    public function criticality()
    {
        return $this->hasOne(Criticality::class, 'id_criticality', 'id_criticality');
    }
}
