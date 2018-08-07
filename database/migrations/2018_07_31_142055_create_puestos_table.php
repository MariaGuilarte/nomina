<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuestosTable extends Migration
{

    public function up()
    {
      Schema::create('puestos', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nombre');
        $table->integer('sueldo_base');
        $table->unsignedInteger('departamento_id');
        $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
        $table->timestamps();
      });
    }
    
    public function down()
    {
      Schema::dropIfExists('puestos');
    }
}
