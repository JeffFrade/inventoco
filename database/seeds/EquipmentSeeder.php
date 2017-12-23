<?php

use Illuminate\Database\Seeder;
use InvOco\Equipment;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipment::create([
            'serial_number' => '0168620666065',
            'codebar' => '2027107907320',
            'item' => 'odit',
            'brand' => 'eveniet',
            'fabrication_model' => 'officiis',
            'id_sector' => 2,
            'id_room' => 2,
            'id_type' => 2
        ]);

        factory(Equipment::class, 20)->create();
    }
}
