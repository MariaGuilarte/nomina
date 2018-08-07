<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeduccionesEmpleadosSemanasTable extends Migration
{
    public function up()
    {
      Schema::create('deducciones_empleados_semanas', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('deduccion_id');
        $table->foreign('deduccion_id')->references('id')->on('deduccions')->onDelete('cascade');
        
        $table->unsignedInteger('empleado_id');
        $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
        
        $table->unsignedInteger('semana_id');
        $table->foreign('semana_id')->references('id')->on('semanas')->onDelete('cascade');
        
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('deducciones_empleados_semanas');
    }
}
