<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table = 'entradas';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
          'venta_id'
        , 'total'
    ];

    public static function reglasValidacion() {
        // https://laravel.com/docs/9.x/validation#available-validation-rules
        return [
            'venta_id' => 'required|integer|min:0'
            , 'total' => 'required|numeric|min:0|max:3000'
        ];
    }

    public static function etiquetas() {
        return [
              'venta_id' => 'venta'
            , 'total' => 'total'
        ];
    }
}
