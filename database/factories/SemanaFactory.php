<?php

use Faker\Generator as Faker;

$factory->define(App\Semana::class, function (Faker $faker) {
    return [
      'fecha_ini' => $faker->dateTimeInInterval($startDate = '0 years', $interval = '+ 5 days'),
      'fecha_fin' => $faker->dateTimeInInterval($startDate = '0 years', $interval = '+ 5 days')
    ];
});
