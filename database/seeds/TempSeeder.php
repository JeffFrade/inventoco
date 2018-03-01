<?php

use Illuminate\Database\Seeder;
use InvOco\Repositories\Models\Temp;

class TempSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Temp::class, 5)->create();
    }
}
