<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entry;
use Faker\Generator as Faker;

$factory->define(Entry::class, function (Faker $faker) {
    return [
        'amount_entry' => $faker->numberBetween(100, 1000),
        'article_id' => $faker->numberBetween(1, 20),
    ];
});
