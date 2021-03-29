<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdministradorUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nombre"=> "required",
            "apellido_paterno"=>"required",
            "apellido_materno"=> "required",
            "direccion"=> "required",
            "carnet_identidad"=>"required",
            "fecha_nacimiento"=> "required",
            "telefono"=> "required",
            "email"=> "required|email|unique:users,email,".$this->route('id')
        ];
    }
}
