<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartamento extends FormRequest
{
    public function authorize(){
      return true;
    }

    public function rules()
    {
      return [
        "nombre" => "required|max:300"
      ];
    }
}
