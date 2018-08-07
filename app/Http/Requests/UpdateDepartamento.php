<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDepartamento extends FormRequest
{
    public function authorize(){
      return true;
    }

    public function rules(){
      return [
        "nombre" => "max:300"
      ];
    }
}
