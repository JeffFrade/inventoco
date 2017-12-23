<?php

namespace InvOco;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipments';

    public function sector()
    {
        return $this->hasOne(Sector::class, 'id_sector', 'id_type');
    }
}
