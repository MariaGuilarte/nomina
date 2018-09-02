<?php

use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{
  public function run()
  {
    factory( App\Departamento::class, 20 )->create()->each( function($dpt){
      $dpt->puestos()->saveMany( factory( App\Puesto::class, 5)->make());
    });
  }
}
