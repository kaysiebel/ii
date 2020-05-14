<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Consumption;
use Faker\Generator as Faker;

$factory->define(Consumption::class, function (Faker $faker) {
    return [
        'amount_consumption' => $faker->numberBetween(100, 1000),
        'article_id' => $faker->numberBetween(1, 20),
    ];
});
