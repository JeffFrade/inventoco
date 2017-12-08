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

        // $this->call(UsersTableSeeder::class;
    }
}
