<?php

namespace InvOco;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';

    public $timestamps = false;

    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'serial_number', 'serial_number');
    }
}
