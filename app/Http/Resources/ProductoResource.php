<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id
            , 'proveedor_id' => $this->proveedor_id
            , 'producto' => $this->producto
            , 'existencias' => $this->existencias
            , 'costo_unitario' => $this->costo_unitario
            , 'precio_unitario' => $this->precio_unitario
        ];
    }
}
