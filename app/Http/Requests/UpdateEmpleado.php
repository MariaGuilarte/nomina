<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmpleado extends FormRequest
{
    public function authorize()
    {
      return true;
    }

    public function rules()
    {
      return [
        "microsip" => "int",
        "nombre" => "max:200",
        "tipo" => "max:200"
      ];
    }
}
