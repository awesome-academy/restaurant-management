<?php

use Faker\Generator as Faker;

$factory->define(App\Table::class, function (Faker $faker) {
    return [
        'number' => $faker->numberBetween($min=1, $max=30),
        'status' => '1',
        'created_at' => new DateTime,
        'updated_at' => new DateTime,

    ];
});
