<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'proveedor_id'
        , 'producto'
        , 'existencias'
        , 'costo_unitario'
        , 'precio_unitario'
    ];

    public static function reglasValidacion() {
        // https://laravel.com/docs/9.x/validation#available-validation-rules
        return [
            'proveedor_id' => 'required|integer|min:0'
            , 'producto' => 'required|string|min:3|max:100'
            , 'existencias' => 'required|numeric|min:0|max:2000'
            , 'costo_unitario' => 'required|numeric|min:0|max:3000'
            , 'precio_unitario' => 'required|numeric|min:0|max:10000'
        ];
    }

    public static function etiquetas() {
        return [
            'proveedor_id' => 'proveedor'
            , 'producto' => 'producto'
            , 'existencias' => 'existencias'
            , 'costo_unitario' => 'costo_unitario'
            , 'precio_unitario' => 'precio_unitario'
        ];
    }
}
