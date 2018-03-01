<?php

use Illuminate\Database\Seeder;
use InvOco\Repositories\Models\TypeEquipment;

class TypeEquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeEquipment::create([
            'type' => 'Router'
        ]);

        TypeEquipment::create([
            'type' => 'Computer'
        ]);

        TypeEquipment::create([
            'type' => 'Television'
        ]);

        TypeEquipment::create([
            'type' => 'Switch'
        ]);

        TypeEquipment::create([
            'type' => 'Printer'
        ]);

        TypeEquipment::create([
            'type' => 'Headphone'
        ]);

        TypeEquipment::create([
            'type' => 'Mouse'
        ]);

        TypeEquipment::create([
            'type' => 'Keyboard'
        ]);
    }
}
