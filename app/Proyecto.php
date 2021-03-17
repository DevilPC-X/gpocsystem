<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Proyecto extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'proyectos';
    protected $fillable = ['nombre'];

    public $timestamps = false;

    public function supplies()
    {
        return $this->hasMany('App\Insumo');
    }
}
