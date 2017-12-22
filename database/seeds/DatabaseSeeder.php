<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ActionSeeder::class);
         $this->call(LevelSeeder::class);
         $this->call(PermissionSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(TypeEquipmentSeeder::class);
         $this->call(SectorSeeder::class);
         $this->call(RoomSeeder::class);
         $this->call(EquipmentSeeder::class);
    }
}
