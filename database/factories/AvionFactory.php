<?php

use Faker\Generator as Faker;

$factory->define(App\Avion::class, function (Faker $faker) {
    return [
        'modelo' => $faker->name,
        'codigo' => $faker->stateAbbr.$faker->postcode,
        'taramax' => $faker->numberBetween (1000,9000)
    ];
});
