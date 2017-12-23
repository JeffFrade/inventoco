<?php

use Faker\Generator as Faker;
use InvOco\Temp;

$factory->define(Temp::class, function (Faker $faker) {
    $users = [0 => 'admin', 1 => 'user'];

    return [
        'sector' => $faker->word,
        'room' => $faker->word,
        'date' => $faker->dateTime,
        'user' => $users[rand(0, 1)],
        'serial_number' => '0168620666065',
    ];
});
