<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Departement;
use Faker\Generator as Faker;

$factory->define(Departement::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid(),
        'name' => $faker->unique(true,50000)->randomElement(['DF','Weaving','Gudang','PPIC','Finance','IT','Marketing','HR/GA'])
    ];
});
