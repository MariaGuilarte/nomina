<?php

use Illuminate\Database\Seeder;

class SemanasTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('semanas')->insert([
        'fecha_ini' => '2018-02-01',
        'fecha_fin' => '2018-02-07'
      ]);
    }
}
