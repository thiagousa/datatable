<?php

use Faker\Generator as Faker;
use App\Post;
use App\User;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return  factory(User::class)->create()->id;
        },
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'body' => $faker->text($maxNbChars = 200),
    ];
});
