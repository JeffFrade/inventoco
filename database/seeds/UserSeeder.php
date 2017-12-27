<?php

use Illuminate\Database\Seeder;
use InvOco\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user' => 'admin',
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123'),
            'id_level' => 1
        ]);

        User::create([
            'user' => 'user',
            'name' => 'User',
            'email' => 'user@mail.com',
            'password' => bcrypt('123'),
            'id_level' => 2
        ]);
    }
}
