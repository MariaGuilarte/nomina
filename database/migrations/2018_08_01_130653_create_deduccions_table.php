<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeduccionsTable extends Migration
{
    public function up()
    {
      Schema::create('deduccions', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nombre');
        $table->decimal('monto');
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('deduccions');
    }
}
