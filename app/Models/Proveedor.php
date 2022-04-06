<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
          'nombre'
        , 'empresa'
        , 'dias_visita'
    ];

    public static function reglasValidacion() {
        // https://laravel.com/docs/9.x/validation#available-validation-rules
        return [
              'nombre' => 'required|string|min:0'
            , 'empresa' => 'required|string|min:0|max:2000'
            , 'dias_visita' => 'required|string|min:0|max:50'
        ];
    }

    public static function etiquetas() {
        return [
              'nombre' => 'nombre'
            , 'empresa' => 'empresa'
            , 'dias_visita' => 'dias_visita'
        ];
    }
}
