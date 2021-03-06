<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use League\CommonMark\Block\Element\Paragraph;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'productname' => $faker->name,
        'description' => $faker->paragraph(25),
        'price' => $faker->randomFloat(2, 1, 99), 
        'rating' => $faker->numberBetween(1, 10),
        'created_at' => $faker->dateTimeThisDecade('now', null),
        'updated_at' => $faker->dateTimeThisDecade('now', null),
    ];
});
