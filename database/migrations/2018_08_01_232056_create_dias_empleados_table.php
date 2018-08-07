<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiasEmpleadosTable extends Migration
{
    public function up()
    {
      Schema::create('dias_empleados', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('dia_id');
        $table->foreign('dia_id')->references('id')->on('dias')->onDelete('cascade');
        
        $table->unsignedInteger('empleado_id');
        $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
        
        // $table->decimal('cantidad_dias');
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('dias_empleados');
    }
}
