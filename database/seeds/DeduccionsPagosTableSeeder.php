<?php

use Illuminate\Database\Seeder;
use App\Deduccion;
use App\Pago;

class DeduccionsPagosTableSeeder extends Seeder
{
    public function run()
    {
      for( $i = 0; $i <= 50; $i++){
        DB::table('deduccion_pago')->insert(
          [
            'deduccion_id' => Deduccion::select('id')->orderByRaw('RAND()')->first()->id,
            'pago_id' => Pago::select('id')->orderByRaw('RAND()')->first()->id
          ]
        );
      }
    }
}
