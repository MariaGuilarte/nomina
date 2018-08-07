<?php

use Illuminate\Database\Seeder;

class DeduccionsTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('deduccions')->insert([
        'nombre' => 'I.M.S.S',
        'monto' => 40.10
      ]);
    }
}
