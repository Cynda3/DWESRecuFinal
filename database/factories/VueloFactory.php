<?php

use Faker\Generator as Faker;

$factory->define(App\Vuelo::class, function (Faker $faker) {
	$faker = \Faker\Factory::create('es_ES');
    return [
        'nombre' => str_random(10).$faker->numberBetween (100,999),
        'origen' => $faker->state,
        'destino' => $faker->state,
        'plazas' => $faker->numberBetween (1,400),
        'fecha' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years', $timezone = null)
    ];
});
