<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'arrived_at' => $faker->dateTimeBetween('-1 year', 'now'),
        'price' => $price = $faker->randomFloat(2, 100, 1000),
        'count' => $faker->numberBetween(100, 1000),
        'sold' => $faker->numberBetween(1, 1000),
        'created_at' => new DateTime('now'),
        'updated_at' => new DateTime('now'),
    ];
});

$factory->state(Product::class, 'sunglasses', function () {

    return [
        'name' => "Sunglasses #0",
        'type' => 'accessories',
        'subtype' => 'sunglasses',
        'image' => 1,
    ];
});

$id = 0;

$factory->state(Product::class, 'backpacks', function () {
    return [
        'name' => "Backpack #0",
        'type' => 'accessories',
        'subtype' => 'backpacks',
        'image' => 1,
    ];
});

$factory->state(Product::class, 'new', function (Faker $faker) {
    return [
        'arrived_at' => $faker->dateTimeBetween('-27 days', 'now'),

    ];
});

$factory->state(Product::class, 'on_sale', function (Faker $faker) {
    return [
        'price' => $price = $faker->randomFloat(2, 100, 1000),
        'discount' => $price / 100 * $faker->numberBetween(1, 30),
    ];
});

$factory->state(Product::class, 'best_sellers', function ($faker) {
    return [
        'count' => $faker->numberBetween(1, 10),
        'sold' => $faker->numberBetween(100000, 1000000),
    ];
});