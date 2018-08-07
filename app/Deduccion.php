<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deduccion extends Model
{
  function empleados(){
    return $this->hasMany('App\Empleado');
  }
  
  function semana(){
    return $this->belongsTo('App\Semana');
  }
  
}
