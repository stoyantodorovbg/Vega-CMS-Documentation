<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'sub_title' => $faker->text,
        'content' => $faker->text,
        'status' => 1,
    ];
});
