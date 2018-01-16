<?php

namespace InvOco;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipments';

    public function sector()
    {
        return $this->hasOne(Sector::class, 'id_sector', 'id_sector');
    }

    public function type()
    {
        return $this->hasOne(TypeEquipment::class, 'id_type', 'id_type');
    }

    public function room()
    {
        return $this->hasOne(Room::class, 'id_room', 'id_room');
    }
}
