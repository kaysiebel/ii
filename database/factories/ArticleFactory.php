<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'piece_start_stock' => $faker->numberBetween(1000, 99000),
        'piece_min_stock' => $faker->numberBetween(1000, 99000),
        'piece_max_stock' => $faker->numberBetween(1000, 99000),
        'piece_order_stock' => $faker->numberBetween(1000, 99000),
        'piece_weight' => $faker->numberBetween(1, 110),
        'unit_start_stock' => $faker->numberBetween(1000, 99000),
        'unit_min_stock' => $faker->numberBetween(1000, 99000),
        'unit_max_stock' => $faker->numberBetween(1000, 99000),
        'unit_order_stock' => $faker->numberBetween(1000, 99000),
        'unit_weight' => $faker->numberBetween(10, 9900),
        'unit_size' => $faker->numberBetween(2, 10000),
        'location' => $faker->name,
        'location_maxweight' => $faker->numberBetween(1000, 9900),
        // 'image' => $faker->imageUrl(),
    ];
});
