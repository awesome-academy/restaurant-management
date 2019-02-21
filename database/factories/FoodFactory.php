<?php

use Faker\Generator as Faker;

$factory->define(App\Food::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(100),
        'ingredient' => $faker->text(2000),
        'content' => $faker->text(1000),
        'price' => rand(1, 50) * 100000,
        'unit' => $faker->text(20),
        'hot' => '1',
        'new' => '1',
        'discount_id' => '1',
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
