<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VentaRequest extends FormRequest
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
            'producto_id' => 'required|integer|min:0',
             'cantidad' => 'required|numeric|min:0|max:3000',
             'total' => 'required|numeric|min:0|max:3000',
        ];
    }

    public function messages()
    {
    return [
        'producto.required' => 'El producto debe ser un campo requerido',
        'cantidad.required' => 'La cantidad debe ser un campo requerido',
        'cantidad.min' => 'La cantidad debe tener minimo un caracter',
        'cantidad.max' => 'La cantidad debe tener maximo 5 caracteres',
        'total.required' => 'El total debe ser un campo requerido',
        ];
    }
}
