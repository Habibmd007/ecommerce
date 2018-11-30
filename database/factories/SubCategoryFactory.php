<?php

use Faker\Generator as Faker;

$factory->define(App\Subcategory::class, function (Faker $faker) {
    return [
        'category_id' => 1,
        'sub_category_name' => $faker->name,
        'sub_category_disc' => $faker->text,
        'publication_status' =>1,
    ];
});
