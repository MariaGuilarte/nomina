<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
      // $this->call(UsersTableSeeder::class);
      // $this->call(PuestosTableSeeder::class);
      $this->call(DepartamentosTableSeeder::class);
      $this->call(SemanasTableSeeder::class);
      $this->call(EmpleadosTableSeeder::class);
      // $this->call(DiasTableSeeder::class);
      $this->call(EmpleadosSemanasTableSeeder::class);
      $this->call(DeduccionsTableSeeder::class);
      $this->call(DeduccionsPagosTableSeeder::class);
    }
}
