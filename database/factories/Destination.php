<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DestinationModel;
use Faker\Generator as Faker;

$factory->define(DestinationModel::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'address' => $faker->address,
        'type' => $faker->sentence(1),
        'rating' => $faker->randomNumber()
    ];
});
