<?php

use Faker\Generator as Faker;

$factory->define(App\Pasajero::class, function (Faker $faker) {
	$faker = \Faker\Factory::create('es_ES');

    return [
		'nif' => $faker->dni,
		'nombre' => $faker->firstName,
		'apellido' => $faker->lastname,
		'email' => $faker->email,
        'telefono' => $faker->phoneNumber,
        'fechanacimiento' => $faker->dateTimeBetween($startDate = '-85 years', $endDate = 'now', $timezone = null),
		'genero' => $faker->numberBetween (0,2)
    ];
});

