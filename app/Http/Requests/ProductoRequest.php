<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
            'proveedor_id' => 'required|integer|min:0'
            , 'producto' => 'required|string|min:3|max:100'
            , 'existencias' => 'required|numeric|min:0|max:2000'
            , 'costo_unitario' => 'required|numeric|min:0|max:3000'
            , 'precio_unitario' => 'required|numeric|min:0|max:10000'
        ];
    }

    public function messages()
    {
    return [
        'proveedor_id.required' => 'proveedor_id debe ser un campo requerido',
        'producto.required' => 'El producto debe ser un campo requerido',
        'producto.min' => 'El producto debe tener minimo tres caracteres',
        'producto.max' => 'El producto debe tener maximo 100 caracteres',
        'existencias.required' => 'Las existencias deben ser un campo requerido',
        'existencias.min' => 'Las existencias deben tener minimo un caracter',
        'existencias.max' => 'Las existencias deben tener maximo 200 caracteres',
        'costo_unitario.required' => 'El costo debe ser un campo requerido',
        'costo_unitario.min' => 'El costo debe tener minimo un caracter',
        'costo_unitario.max' => 'El costo debe tener maximo 5 caracteres',
        'precio_unitario.required' => 'El precio debe ser un campo requerido',
        'precio_unitario.min' => 'El precio debe tener minimo un caracter',
        'precio_unitario.max' => 'El precio debe tener maximo 5 caracteres',
        ];
    }
}
