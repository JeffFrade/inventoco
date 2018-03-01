<?php

use Illuminate\Database\Seeder;
use InvOco\Repositories\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = new Permission();

        $permissions->create([
            'id_level' => 1,
            'id_action' => 1,
        ]);

        $permissions->create([
            'id_level' => 1,
            'id_action' => 2,
        ]);

        $permissions->create([
            'id_level' => 1,
            'id_action' => 3,
        ]);

        $permissions->create([
            'id_level' => 1,
            'id_action' => 4,
        ]);

        $permissions->create([
            'id_level' => 1,
            'id_action' => 5,
        ]);

        $permissions->create([
            'id_level' => 2,
            'id_action' => 2,
        ]);

        $permissions->create([
            'id_level' => 2,
            'id_action' => 3,
        ]);

        $permissions->create([
            'id_level' => 2,
            'id_action' => 5,
        ]);
    }
}
