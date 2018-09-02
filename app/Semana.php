<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semana extends Model
{ 
  public function pagos(){
    return $this->hasMany('App\Pago');
  }
  
  public function empleados(){
    return $this->belongsToMany('App\Empleado', 'empleado_semana', 'semana_id', 'empleado_id')->withPivot('fecha', 'status');
  }
  
  public function nomina(){
    return $this->hasOne('App\Nomina');
  }
}
