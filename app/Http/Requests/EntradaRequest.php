<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntradaRequest extends FormRequest
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
            'venta_id' => 'required|integer|min:0',
             'total' => 'required|numeric|min:0|max:3000',
        ];
    }

    public function messages()
    {
    return [
        'venta_id.required' => 'usuario_id debe ser un campo requerido',
        'total.required' => 'El total debe ser un campo requerido',
        ];
    }
}