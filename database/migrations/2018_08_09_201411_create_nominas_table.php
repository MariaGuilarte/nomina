<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominasTable extends Migration
{
  public function up()
  {
    Schema::create('nominas', function (Blueprint $table){
      $table->increments('id');
      $table->unsignedInteger('semana_id');
      $table->foreign('semana_id')->references('id')->on('semanas')->onDelete('cascade');
      $table->decimal('base');
      $table->decimal('fiscal');
      $table->decimal('extra');
      $table->decimal('interno');
      $table->decimal('vacaciones');
      $table->decimal('total');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('nominas');
  }
}
