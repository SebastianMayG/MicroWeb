<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'nombre'=>'required|max:50',
            'tipo_documento'=>'required|max:20',
            'num_comprobante'=>'required|max:15',
            'direccion'=>'max:100',
            'telefono'=>'max:15',
            'email'=>'max:50'

        ];
    }
}
