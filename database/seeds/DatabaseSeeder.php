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
         $this->call(TransferSeeder::class);
         $this->call(TempSeeder::class);
         $this->call(CriticalitySeeder::class);
         $this->call(TypeOccurrenceSeeder::class);
         $this->call(OccurrenceSeeder::class);
         $this->call(DocumentSeeder::class);
    }
}
