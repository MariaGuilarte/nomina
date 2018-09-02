<?php

use Faker\Generator as Faker;

$factory->define(App\Puesto::class, function (Faker $faker) {
    return [
      'nombre' => $faker->name,
      'sueldo_base' => $faker->numberBetween(1000,2000),
      'departamento_id' => $faker->numberBetween(1,10),
    ];
});
