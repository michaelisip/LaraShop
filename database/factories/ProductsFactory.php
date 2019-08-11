<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($faker->numberBetween(3, 10)),
        'description' => $faker->paragraph(2),
        'price' => $faker->numberBetween(10, 999)
    ];
});
