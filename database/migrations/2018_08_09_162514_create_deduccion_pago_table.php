<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeduccionPagoTable extends Migration
{
  public function up()
  {
    Schema::create('deduccion_pago', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('deduccion_id');
      $table->foreign('deduccion_id')->references('id')->on('deduccions')->onDelete('cascade');
      
      $table->unsignedInteger('pago_id');
      $table->foreign('pago_id')->references('id')->on('pagos')->onDelete('cascade');
      $table->timestamps();
    });
  }
  
  public function down()
  {
    Schema::dropIfExists('deduccion_pago');
  }
}
