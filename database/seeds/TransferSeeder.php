<?php

use Illuminate\Database\Seeder;
use InvOco\Repositories\Models\Transfer;

class TransferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Transfer::class, 5)->create();
    }
}
