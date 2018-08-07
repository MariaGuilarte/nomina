<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    public function up()
    {
      Schema::create('pagos', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('semana_id');
        $table->foreign('semana_id')->references('id')->on('semanas')->onDelete('cascade');
        
        $table->unsignedInteger('empleado_id');
        $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
        
        $table->unsignedInteger('dia_id');
        $table->foreign('dia_id')->references('id')->on('dias')->onDelete('cascade');
        
        $table->decimal('cantidad_dias')->default(0);
        $table->decimal('sueldo_semana')->nullable();
        $table->decimal('sueldo_a_pagar')->nullable();
        $table->decimal('sueldo_fiscal')->nullable();
        
        $table->boolean('pagado')->default(false);
        $table->string('nota')->default("sin nota");
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('pagos');
    }
}
