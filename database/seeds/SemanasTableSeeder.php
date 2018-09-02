<?php

use Illuminate\Database\Seeder;

class SemanasTableSeeder extends Seeder
{
    public function run()
    {
      factory( App\Semana::class, 5)->create();
    }
}
