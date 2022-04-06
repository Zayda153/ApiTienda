<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    protected $table = 'salidas';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
          'entrada_id'
        , 'nombre'
        , 'salida'
    ];

    public static function reglasValidacion() {
        // https://laravel.com/docs/9.x/validation#available-validation-rules
        return [
            'entrada_id' => 'required|integer|min:0'
            , 'nombre' => 'required|string|min:0|max:2000'
            , 'salida' => 'required|numeric|min:0|max:3000'
        ];
    }

    public static function etiquetas() {
        return [
              'entrada_id' => 'entrada'
            , 'nombre' => 'nombre'
            , 'salida' => 'salida'
        ];
    }
}
