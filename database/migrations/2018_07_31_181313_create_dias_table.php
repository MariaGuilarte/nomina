<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiasTable extends Migration
{
    public function up()
    {
      Schema::create('dias', function (Blueprint $table) {
        $table->increments('id');
        $table->string('dia');
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('dias');
    }
}
