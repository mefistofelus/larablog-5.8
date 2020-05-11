<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $title = $faker->realText(rand(10, 40));
    $short_title = mb_strlen($title) > 30 ? mb_substr($title, 0, 30) . '...' : $title;
    $description = $faker->realText(rand(200, 500));
    //$img = \Illuminate\Support\Str::random(10);
    $created = $faker->dateTimeBetween('-14days', '-1days');

    return [
        'title' => $title,
        'short_title' => $short_title,
        'description' => $description,
        //'img' => $img,
        'author_id' => rand(1, 4),
        'created_at' => $created,
        'updated_at' => $created,
    ];
});
