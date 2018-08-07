<?php

use Illuminate\Database\Seeder;

class EmpleadosTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('empleados')->insert([
        'nombre' => 'CEPEDA GUADALUPE',
        'microsip' => 12,
        'departamento_id' => 3,
        'puesto_id' => 4
      ]);
      
      DB::table('empleados')->insert([
        'nombre' => 'ENRIQUEZ MARTINEZ TERESA',
        'microsip' => 1,
        'departamento_id' => 1,
        'puesto_id' => 2
      ]);
      
      DB::table('empleados')->insert([
        'nombre' => 'GARCIA LUIS ANGEL',
        'microsip' => 3,
        'departamento_id' => 1,
        'puesto_id' => 5
      ]);
      
      DB::table('empleados')->insert([
        'nombre' => 'WILL GOMEZ HANS',
        'microsip' => '120',
        'departamento_id' => 4,
        'puesto_id' => 9
      ]);
      
      DB::table('empleados')->insert([
        'nombre' => 'QUIROZ JIMENEZ ARTURO',
        'microsip' => '12',
        'departamento_id' => 3,
        'puesto_id' => 7
      ]);
      
      DB::table('empleados')->insert([
        'nombre' => 'SALAS CANALES MARIA REYNA',
        'microsip' => '25',
        'departamento_id' => 4,
        'puesto_id' => 8
      ]);
    }
}
