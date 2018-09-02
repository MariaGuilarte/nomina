<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
  public function semana(){
    return $this->belongsTo('App\Semana');
  }
}
