<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Unit;
use Faker\Generator as Faker;

$factory->define(Unit::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'price' => $faker->numberBetween(1000, 5000),
        'description' => $faker->sentence(20),
    ];
});
