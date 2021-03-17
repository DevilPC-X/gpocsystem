<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenItem extends Model
{
    protected $table = 'orden_items';
    protected $primaryKey = 'id';
    protected $fillable = [
        'idinsumo', 'nombre', 'precio_unitario', 'cantidad', 'subtotal', 'idactividad', 'idusuario'
    ];
    public $timestamps = false;
}
