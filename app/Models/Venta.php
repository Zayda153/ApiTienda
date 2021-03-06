<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
          'producto_id'
        , 'cantidad'
        , 'total'
    ];

    public static function reglasValidacion() {
        // https://laravel.com/docs/9.x/validation#available-validation-rules
        return [
            'producto_id' => 'required|integer|min:0'
            , 'cantidad' => 'required|numeric|min:0|max:3000'
            , 'total' => 'required|numeric|min:0|max:3000'
        ];
    }

    public static function etiquetas() {
        return [
              'producto_id' => 'producto'
            , 'cantidad' => 'cantidad'
            , 'total' => 'total'
        ];
    }
}
