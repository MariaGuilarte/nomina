<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
  function empleado(){
    return $this->belongsTo('App\Empleado');
  }
  
  function semana(){
    return $this->belongsTo('App\Semana');
  }
  
  function deduccions(){
    return $this->belongsToMany('App\Deduccion')->withTimestamps();
  }
  
  public function scopeFecha($query, $fecha)
  {
    return $query->where('fecha', '=', $fecha);
  }
}
