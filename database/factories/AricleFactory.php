<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title'=>$faker->text(50),
        'slug'=>$faker->unique()->slug,
        'excerpt'=>$faker->sentence(4),
        'body'=>$faker->paragraph(4),
        'user_id'=>$faker->numberBetween(1,3)
    ];
});
