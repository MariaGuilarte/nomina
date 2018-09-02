<?php

use Faker\Generator as Faker;

$factory->define(App\Empleado::class, function (Faker $faker) {
  return [
    'nombre' => $faker->name,
    'microsip' => $faker->numberBetween(1,100),
    'puesto_id' => $faker->numberBetween(1,50),
    'departamento_id' => $faker->numberBetween(1,20),
  ];
});