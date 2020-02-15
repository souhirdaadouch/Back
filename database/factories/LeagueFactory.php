<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\League::class, function (Faker $faker) {
    return [
             'name' => $faker->name,
             'address' => $faker->address,
             'director' => $faker->name
    ];
});
