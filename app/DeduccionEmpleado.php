<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeduccionEmpleado extends Model
{
  function deduccions(){
    return $this->belongsTo('App\Deduccion');
  }
}
