<?php

use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{
    public function run()
    {
      DB::table('departamentos')->insert([
        'nombre' => 'Corte',
        'tipo' => 'Mano de obra'
      ]);
      
      DB::table('departamentos')->insert([
        'nombre' => 'Compras',
        'tipo' => 'Interno'
      ]);
      
      DB::table('departamentos')->insert([
        'nombre' => 'Administración',
        'tipo' => 'Interno'
      ]);
      
      DB::table('departamentos')->insert([
        'nombre' => 'Desarrollo',
        'tipo' => 'Interno'
      ]);
      
      DB::table('departamentos')->insert([
        'nombre' => 'Vigilancia',
        'tipo' => 'Interno'
      ]);
      
      DB::table('departamentos')->insert([
        'nombre' => 'Avíos',
        'tipo' => 'Mano de obra'
      ]);
      
      DB::table('departamentos')->insert([
        'nombre' => 'Embarque',
        'tipo' => 'Interno'
      ]);
      
      DB::table('departamentos')->insert([
        'nombre' => 'Ventas',
        'tipo' => 'Interno'
      ]);
      
      DB::table('departamentos')->insert([
        'nombre' => 'Pespunte',
        'tipo' => 'Mano de obra'
      ]);
      
      DB::table('departamentos')->insert([
        'nombre' => 'Adorno',
        'tipo' => 'Mano de obra'
      ]);
      
      DB::table('departamentos')->insert([
        'nombre' => 'Montado',
        'tipo' => 'Mano de obra'
      ]);
    }
}
