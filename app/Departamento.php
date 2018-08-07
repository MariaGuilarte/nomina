<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
  protected $fillable = [
    'nombre'
  ];
  
  function puestos(){
    return $this->hasMany('App\Puesto');
  }
  
  function empleados(){
    return $this->hasMany('App\Empleado');
  }
}
