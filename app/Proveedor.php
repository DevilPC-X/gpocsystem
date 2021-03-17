<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre'];

    public $timestamps = false;

    //NUEVA OPERACION
    public function proveedor()
    {
        return $this->hasMany('App\Proveedor');
    }
    //FIN OPERACION NUEVA
}
