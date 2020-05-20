<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entry;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Entry::class, function (Faker $faker) {
    return [
        'amount_entry' => $faker->numberBetween(100, 1000),
        'article_id' => $faker->numberBetween(1, 20),
        'created_at' => Carbon::now()
            ->subDays(rand(1, 10))
            ->format('Y-m-d H:i:s')
    ];
});
