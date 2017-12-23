<?php

use Faker\Generator as Faker;
use InvOco\Occurrences;

$factory->define(Occurrences::class, function (Faker $faker) {
    $users = [0 => 'admin', 1 => 'user'];

    return [
        'title' => $faker->word,
        'description' => $faker->text,
        'status' => $faker->word,
        'serial_number' => '0168620666065',
        'id_criticality' => rand(1, 3),
        'id_type' => rand(1, 3),
        'user' => $users[rand(0, 1)],
    ];
});
