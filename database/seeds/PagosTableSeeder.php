<?php

use Illuminate\Database\Seeder;

class PagosTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('pagos')->insert([
        'semana_id' => 1,
        'empleado_id' => 1,
        'dia_id' => 1,
        'cantidad_dias' => 1,
        'sueldo_semana' => 2100,
        'sueldo_a_pagar' => 2100,
        'sueldo_fiscal' => 500,
        'pagado' => true,
        'nota' => 'Pago de 2600 a departamento interno'
      ]);
    }
}
