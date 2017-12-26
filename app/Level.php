<?php

namespace InvOco;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $primaryKey = 'id_level';

    public $timestamps = false;

    public function users()
    {
        $this->belongsTo(User::class, 'id_level', 'id_level');
    }
}
