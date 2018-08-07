<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePuesto extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
          "nombre" => "required|max:300",
          "departamento_id" => "required"
        ];
    }
}
