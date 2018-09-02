<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model{
  
  protected $fillable = [
    'puesto_id', 'nombre', 'departamento_id', 'microsip'
  ];
  
  function departamento(){
    return $this->belongsTo('App\Departamento');
  }
  
  function puesto(){
    return $this->belongsTo('App\Puesto');
  }
  
  function pagos(){
    return $this->hasMany('App\Pago');
  }
  
  // DIAS DE TRABAJO
  function semanas(){ 
    return $this->belongsToMany('App\Semana', 'empleado_semana', 'empleado_id', 'semana_id')->withPivot('fecha', 'status');
  }
}
