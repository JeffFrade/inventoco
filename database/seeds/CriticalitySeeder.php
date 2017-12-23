<?php

use Illuminate\Database\Seeder;
use InvOco\Criticality;

class CriticalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Criticality::create(['criticality' => 'Low']);

        Criticality::create(['criticality' => 'Medium']);

        Criticality::create(['criticality' => 'High']);
    }
}
