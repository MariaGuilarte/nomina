<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model{
  
  function departamento(){
    return $this->belongsTo('App\Departamento');
  }
  
  function puesto(){
    return $this->belongsTo('App\Puesto');
  }
  
  function dias_trabajos(){
    return $this->hasMany('App\Diastrabajo');
  }
 
  function semanas(){
    return $this->hasMany('App\Semana');
  }
  
  function pagos(){
    return $this->hasMany('App\Pago');
  }
  
  function dia(){
    return $this->belongsTo('App\Dia');
  }  
}
