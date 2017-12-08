<?php

use Illuminate\Database\Seeder;
use InvOco\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create(['level' => 'ADM']);
        Level::create(['level' => 'user']);
    }
}
