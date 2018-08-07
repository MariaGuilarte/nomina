<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpleado extends FormRequest
{
    public function authorize(){
      return true;
    }

    public function rules(){
      return [
        "microsip" => "required|int",
        "nombre" => "required|max:200",
        "tipo" => "required|max:200"
      ];
    }
}
