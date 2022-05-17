<?php

namespace App\Http\Requests\Tematicas;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'nombre'=>'required|string|max:255',
            'descripcion'=>'string|max:255',
        ];
    }
    public function messages(){
        return[
            'nombre.required'=>'El nombre de la tematica es obligatoria',
            'nombre.string'=>'El nombre de la tematica debe de contener puros caracteres',
            'nombre.max'=>'El nombre de la tematica debe de conetener menos de 255 caracteres',
            'descripcion.string'=>'La pregunta debe de contener puros caracteres',
            'descripcion.max'=>'La pregunta debe de conetener menos de 255 caracteres',

        ];
    }
}
