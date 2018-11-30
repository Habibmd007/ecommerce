<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'category_name' => $faker->title,
        'category_disc' => $faker->text,
        'publication_status' =>1,
    ];
});
