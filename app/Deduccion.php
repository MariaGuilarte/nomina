<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deduccion extends Model
{
  function pagos(){
    return $this->belongsToMany('App\Pago')->withTimestamps();
  }
}
