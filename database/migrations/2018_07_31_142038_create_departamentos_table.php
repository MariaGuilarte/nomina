<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentosTable extends Migration
{
    public function up()
    {
      Schema::create('departamentos', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nombre');
        $table->integer('tipo')->default(1);
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('departamentos');
    }
}
