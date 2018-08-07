<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semana extends Model
{
  function dias(){
    return $this->hasMany('App\Dia');
  }
  
  function deducciones(){
    return $this->hasMany('App\Deduccion');
  }
  
   function empleados(){
    return $this->hasMany('App\Empleado');
  }
}
