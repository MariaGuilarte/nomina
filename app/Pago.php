<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
  function empleado(){
    return $this->belongsTo('App\Empleado');
  }
  
}
