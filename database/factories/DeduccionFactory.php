<?php

use Faker\Generator as Faker;

$factory->define(App\Deduccion::class, function (Faker $faker) {
    return [
      'nombre' => $faker->word,
      'monto' => $faker->numberBetween(50,200),
    ];
});
