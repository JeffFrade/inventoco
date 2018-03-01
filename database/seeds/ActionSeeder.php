<?php

use Illuminate\Database\Seeder as Seeder;
use InvOco\Repositories\Models\Action;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Action::create(['action' => 'create']);
        Action::create(['action' => 'read']);
        Action::create(['action' => 'update']);
        Action::create(['action' => 'delete']);
        Action::create(['action' => 'relatory']);
    }
}
