<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'chapter_id' => factory('App\Chapter')->create()->id,
        'title' => $faker->sentence(5),
        'slug' => $faker->sentence(5),
    ];
});
