<?php

namespace InvOco;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    public $timestamps = false;

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }
}
