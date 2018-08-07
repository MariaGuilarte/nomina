<?php

use Illuminate\Database\Seeder;

class DeduccionesEmpleadosSemanasTableSeeder extends Seeder
{

    public function run()
    {
      DB::table('deducciones_empleados_semanas')->insert([
        'deduccion_id' => 1,
        'empleado_id' => 1,
        'semana_id' => 1
      ]);
    }
}
