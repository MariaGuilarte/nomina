<?php

use Illuminate\Database\Seeder;

class EmpleadosTableSeeder extends Seeder
{
    public function run()
    {
      factory( App\Empleado::class, 12)->create()->each( function($emp){
        $emp->pagos()->saveMany( factory( App\Pago::class, 5)->make());
      });
    }
}
