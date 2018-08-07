<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemanasTable extends Migration
{
    public function up(){
      Schema::create('semanas', function (Blueprint $table) {
        $table->increments('id');
        $table->date('fecha_ini');
        $table->date('fecha_fin');
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('semanas');
    }
}
