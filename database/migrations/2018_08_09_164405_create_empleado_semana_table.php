<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoSemanaTable extends Migration
{
    public function up()
    {
      Schema::create('empleado_semana', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('semana_id');
        $table->foreign('semana_id')->references('id')->on('semanas')->onDelete('cascade');
        
        $table->unsignedInteger('empleado_id');
        $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
        
        $table->date('fecha')->default('2018-08-09');
        $table->string('status')->default('Dia completo'); //MEDIO DÍA, NO TRABAJADO
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('empleado_semana');
    }
}
