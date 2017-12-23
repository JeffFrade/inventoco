<?php

use Faker\Generator as Faker;
use InvOco\Transfer;

$factory->define(Transfer::class, function (Faker $faker) {
    $users = [0 => 'admin', 1 => 'user'];

    return [
        'old_sector' => $faker->word,
        'new_sector' => $faker->word,
        'date' => $faker->dateTime,
        'user' => $users[rand(0, 1)],
        'serial_number' => '0168620666065',
    ];
});
