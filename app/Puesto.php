<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
  protected $fillable = [
    'departamento_id', 'nombre'
  ];
  
  function departamento(){
    return $this->belongsTo('App\Departamento');
  }
  
  function empleados(){
    return $this->hasMany('App\Empleado');
  }
}
