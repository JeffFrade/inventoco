<?php

use Illuminate\Database\Seeder;
use InvOco\Repositories\Models\TypeOccurrence;

class TypeOccurrenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeOccurrence::create(['type' => 'Maintenance']);

        TypeOccurrence::create(['type' => 'Reposition']);

        TypeOccurrence::create(['type' => 'Stolen']);
    }
}
