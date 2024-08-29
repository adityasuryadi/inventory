<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Departement;
use App\Models\Employee;
use Faker\Generator as Faker;
use Faker\Provider\id_ID\Person as IndonesianPerson;

$factory->define(Employee::class, function (Faker $faker){
    $faker->addProvider(new IndonesianPerson($faker));
    return [
        'id'=>$faker->uuid(),
        'name' => $faker->name,
        'nik'=>$faker->nik(),
        // 'departement_id'=>factory(\App\Models\Departement::class)->create()->id
        'departement_id'=>Departement::all()->random()->id
    ];
});
