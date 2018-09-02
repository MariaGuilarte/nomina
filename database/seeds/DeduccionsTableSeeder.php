<?php

use Illuminate\Database\Seeder;

class DeduccionsTableSeeder extends Seeder
{
    public function run()
    {
      factory( App\Deduccion::class, 15)->create();
    }
}
