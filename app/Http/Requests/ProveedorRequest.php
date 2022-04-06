<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorRequest extends FormRequest
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
            'nombre' => 'required|string|min:0',
            'empresa' => 'required|string|min:0|max:2000',
            'dias_visita' => 'required|string|min:0|max:50',
        ];
    }

    public function messages()
    {
    return [
        'nombre.required' => 'nombre debe ser un campo requerido',
        'empresa.required' => 'La empresa debe ser un campo requerido',
        'empresa.min' => 'La empresa debe tener minimo tres caracteres',
        'empresa.max' => 'La empresa debe tener maximo 6 caracteres',
        'dias_visita.required' => 'dias_visita debe ser un campo requerido',
        ];
    }
}
