<?php

use Faker\Generator as Faker;

$factory->define(App\Pago::class, function (Faker $faker) {
    return [
      'semana_id' => $faker->numberBetween(1,5),
      'empleado_id' => $faker->numberBetween(1,12),
      'cantidad_dias' => $faker->numberBetween(1,7),
      'sueldo_semana' => $faker->numberBetween(1500,3000),
      'sueldo_interno' => $faker->numberBetween(1500,3000),
      'sueldo_a_pagar' => $faker->numberBetween(1500,3000),
      'vacaciones' => $faker->numberBetween(1500,3000),
      'extra' => $faker->numberBetween(200,1000),
      'sueldo_fiscal' => $faker->numberBetween(1500,3000),
      'pagado' => $faker->boolean( $chanceOfGettingTrue = 2 ),
      'nota' => $faker->catchPhrase,
      'fecha' => $faker->dateTimeInInterval($startDate = '0 years', $interval = '+ 5 days')
    ];
});
