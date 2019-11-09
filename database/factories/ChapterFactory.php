<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chapter;
use Faker\Generator as Faker;

$factory->define(Chapter::class, function (Faker $faker) {
    return [
        'name' => $faker->city(),
        'country' => $faker->country(),
        'region' => $faker->city(),
        'address' => $faker->address(),
    ];
});
