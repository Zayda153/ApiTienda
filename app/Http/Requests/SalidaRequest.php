<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalidaRequest extends FormRequest
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
            'entrada_id' => 'required|integer|min:0',
            'nombre' => 'required|string|min:0|max:2000',
            'salida' => 'required|numeric|min:0|max:3000',
        ];
    }
    public function messages()
    {
    return [
        'entrada_id.required' => 'entrada_id debe ser un campo requerido',
        'nombre.required' => 'El nombre debe ser un campo requerido',
        'nombre.min' => 'El nombre debe tener minimo tres caracteres',
        'nombre.max' => 'El nombre debe tener maximo 100 caracteres',
        'salida.required' => 'La salida debe ser un campo requerido',
        'salida.min' => 'La salida debe tener minimo un caracter',
        'salida.max' => 'La salida debe tener maximo 5 caracteres',
        
        ];
    }
}

