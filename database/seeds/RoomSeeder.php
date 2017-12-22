<?php

use Illuminate\Database\Seeder;
use InvOco\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'room' => 'Reception',
            'id_sector' => 1
        ]);

        Room::create([
            'room' => 'IT Department',
            'id_sector' => 1
        ]);

        Room::create([
            'room' => 'Administration Department',
            'id_sector' => 2
        ]);

        Room::create([
            'room' => 'Back Office',
            'id_sector' => 2
        ]);

        Room::create([
            'room' => 'Management Room',
            'id_sector' => 3
        ]);

        Room::create([
            'room' => 'Auditorium',
            'id_sector' => 3
        ]);
    }
}
