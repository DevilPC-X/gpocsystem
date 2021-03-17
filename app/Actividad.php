<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Mpociot\Firebase\SyncsWithFirebase;

class Actividad extends Model
{
    //use SyncsWithFirebase;

    protected $table = 'actividades';
    protected $primaryKey = 'id';
    protected $fillable = ['idproyecto', 'largo', 'alto', 'ancho', 'descripcion', 'idusuario', 'tiempo'];
    public $timestamps = false;
}
