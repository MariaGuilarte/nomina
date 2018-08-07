<?php

use Illuminate\Database\Seeder;

class PuestosTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('puestos')->insert([
        'nombre' => 'Machetero',
        'sueldo_base' => 1500,
        'departamento_id' => 1
      ]);
      
      DB::table('puestos')->insert([
        'nombre' => 'Machetero piel',
        'sueldo_base' => 1800,
        'departamento_id' => 1
      ]);
      
      DB::table('puestos')->insert([
        'nombre' => 'Rebajador A',
        'sueldo_base' => 1200,
        'departamento_id' => 1
      ]);
      
      DB::table('puestos')->insert([
        'nombre' => 'Contabilidad',
        'sueldo_base' => 2100,
        'departamento_id' => 3
      ]);
      
      DB::table('puestos')->insert([
        'nombre' => 'Cortador de forro',
        'sueldo_base' => 1500,
        'departamento_id' => 1
      ]);
      
      DB::table('puestos')->insert([
        'nombre' => 'Machetero piel',
        'sueldo_base' => 1800,
        'departamento_id' => 1
      ]);
      
      DB::table('puestos')->insert([
        'nombre' => 'Chofer',
        'sueldo_base' => 2000,
        'departamento_id' => 3
      ]);
      
      DB::table('puestos')->insert([
        'nombre' => 'Sistemas',
        'sueldo_base' => 2200,
        'departamento_id' => 4
      ]);
      
      DB::table('puestos')->insert([
        'nombre' => 'Programación',
        'sueldo_base' => 1500,
        'departamento_id' => 4
      ]);
    }
}
