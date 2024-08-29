<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Product;
$factory->define(Product::class, function (Faker $faker) {
    return [
        'id'=>$faker->uuid(),
        'name' => $faker->randomElement(['mie','susu','kopi','minyak','teh','paku','semen','pasir','pipa','bata','cat']),
        'code' => $faker->unique()->numberBetween(100000, 999999),
        'stock' => $faker->numberBetween(0, 100),
        'location' => $faker->address,
        'unit' => $faker->randomElement(['pcs', 'meter', 'kg']),
        'description' => $faker->text
    ];
});
