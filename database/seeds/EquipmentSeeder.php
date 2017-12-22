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
        factory(Equipment::class, 20)->create();
    }
}
