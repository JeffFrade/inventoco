<?php

use Illuminate\Database\Seeder;
use InvOco\Sector;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sector::create(['sector' => 'Main Room']);

        Sector::create(['sector' => 'Mezzanine']);

        Sector::create(['sector' => '1º Floor']);
     }
}
