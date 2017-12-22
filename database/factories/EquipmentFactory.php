<?php

use Faker\Generator as Faker;
use InvOco\Equipment;

$factory->define(Equipment::class, function (Faker $faker) {
    return [
        'serial_number' => $faker->ean13,
        'codebar' => $faker->ean13,
        'item' => $faker->word,
        'brand' => $faker->word,
        'fabrication_model' => $faker->word,
        'id_sector' => $faker->numberBetween(1, 2),
        'id_room' => $faker->numberBetween(1, 2),
        'id_type' => $faker->numberBetween(1, 6)
    ];
});
