<?php

use Faker\Generator as Faker;

$factory->define(App\Departamento::class, function (Faker $faker) {
  return [
    'nombre' => $faker->name,
    'tipo' => $faker->numberBetween(1,2),
  ];
});
