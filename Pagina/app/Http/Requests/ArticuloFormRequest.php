<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idcategoria'=>'required',
            'codigo'=>'required|max:50',
            'nombre'=>'required|max:100',
            'stock'=>'required|numeric',
            'descripcion'=>'max:512',
            'imagen'=>'mimes:jpeg,bmp,png,jpg'
        ];
    }
}