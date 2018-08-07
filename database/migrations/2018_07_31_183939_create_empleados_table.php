<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
  public function up(){
    Schema::create('empleados', function (Blueprint $table){
      $table->increments('id');
      $table->unsignedInteger('departamento_id');
      $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
      $table->unsignedInteger('puesto_id');
      $table->foreign('puesto_id')->references('id')->on('puestos')->onDelete('cascade');
      $table->integer('microsip');
      $table->string('nombre');
      $table->timestamps();
    });
  }

  public function down(){
    Schema::dropIfExists('empleados');
  }
}
