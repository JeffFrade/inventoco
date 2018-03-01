<?php

use Faker\Generator as Faker;
use InvOco\Repositories\Models\Document;

$factory->define(Document::class, function (Faker $faker) {
    return [
        'document' => $faker->word.'.'.$faker->fileExtension,
        'serial_number' => '0168620666065',
    ];
});
