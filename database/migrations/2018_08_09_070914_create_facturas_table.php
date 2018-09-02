<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('semana_id');
        $table->foreign('semana_id')->references('id')->on('semanas')->onDelete('cascade');
        
        $table->unsignedInteger('empleado_id');
        $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
