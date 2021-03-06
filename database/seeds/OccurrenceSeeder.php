<?php

use Illuminate\Database\Seeder;
use InvOco\Repositories\Models\Occurrences;

class OccurrenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Occurrences::class, 5)->create();
    }
}
