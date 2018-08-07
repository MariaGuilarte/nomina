<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
  function semana(){
    return $this->belongsTo('App\Semana');
  }
  
  function empleados(){
    return $this->hasMany('App\Empleado');
  }
}
