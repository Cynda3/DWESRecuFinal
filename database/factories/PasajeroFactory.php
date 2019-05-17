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
		'genero' => $faker->numberBetween (0,2),
		'vuelo_id' => rand(1,10),
		'asiento' => rand(1,100),
		'precio_vuelo' => rand(50,350)
    ];
});

