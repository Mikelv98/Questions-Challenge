<?php

namespace App\Http\Requests\Preguntas;

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
            'descripcion'=>'required|string|max:255',
            'respuesta1'=>'required|string|max:255',
            'respuesta2'=>'required|string|max:255',
            'respuestacorrecta'=>'required|string|max:255',
            'puntaje'=>'integer|max:20|nullable',
            'tematica_id'=>'required|integer'
        ];
    }

    public function messages(){
        return[
            'descripcion.required'=>'La pregunta es obligatoria',
            'descripcion.string'=>'La pregunta debe de contener puros caracteres',
            'descripcion.max'=>'La pregunta debe de conetener menos de 255 caracteres',
            'respuesta1.required'=>'La respuesta 1 de la pregunta es obligatoria',
            'respuesta1.string'=>'La respuesta 1 debe de contener puros caracteres',
            'respuesta1.max'=>'La respuesta 1 debe de conetener menos de 255 caracteres',
            'respuesta2.required'=>'La respuesta 2 de la pregunta es obligatoria',
            'respuesta2.string'=>'La respuesta 2 debe de contener puros caracteres',
            'respuesta2.max'=>'La respuesta 2 debe de conetener menos de 255 caracteres',
            'respuestacorrecta.required'=>'La pregunta es obligatoria',
            'respuestacorrecta.string'=>'La pregunta debe de contener puros caracteres',
            'respuestacorrecta.max'=>'La pregunta debe de conetener menos de 255 caracteres',
            'puntaje.integer'=>'El puntaje debe ser número entero',
            'puntaje.max'=>'Solo se perminte hasta 20 de puntaje por pregunta',
            'tematica_id.required'=>'Selecciona una tematica',
            'tematica_id.integer'=>'Selecciona una tematica de la pregunta',

        ];
    }
}

