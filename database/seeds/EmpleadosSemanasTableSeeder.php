<?php

use Illuminate\Database\Seeder;
use App\Empleado;
use App\Semana;

class EmpleadosSemanasTableSeeder extends Seeder
{
    public function run()
    {
      for( $i = 0; $i <= 50; $i++){
        DB::table('empleado_semana')->insert(
          [
            'empleado_id' => Empleado::select('id')->orderByRaw('RAND()')->first()->id,
            'semana_id' => Semana::select('id')->orderByRaw('RAND()')->first()->id,
          ]
        ); 
      }
    }
}
