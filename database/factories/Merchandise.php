<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Merchandise;
use Faker\Generator as Faker;

$factory->define(Merchandise::class, function (Faker $faker) {
    return [
        'brand_name' => $faker->name,
        'product_name' => $faker->name,
        'category_id' => $faker->numberBetween(1,10),
        'unit_id' => $faker->numberBetween(1,10),
        'retail_price' => $faker->randomFloat(2, 1, 1000),
        'wholesale_price' => $faker->randomFloat(2, 1, 1000),
        'wholesale_qty' => $faker->randomFloat(2, 1, 1000),
        'qty_stock' => $faker->randomFloat(2, 1, 1000)
    ];
});

