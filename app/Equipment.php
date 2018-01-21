<?php

namespace InvOco;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipments';

    protected $primaryKey = 'serial_number';

    public $incrementing = false;

    protected $fillable = [
        'serial_number',
        'codebar',
        'item',
        'brand',
        'fabrication_model',
        'image',
        'obs',
        'id_sector',
        'id_room',
        'id_type',
    ];

    protected $guarded = [
        'created_at',
        'updated_at',
    ];

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

    public function document()
    {
        return $this->hasMany(Document::class, 'serial_number', 'serial_number');
    }
}
