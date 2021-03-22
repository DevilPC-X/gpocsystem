<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $table = 'insumos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'unidad', 'precio_unitario', 'idcategoria', 'idproyecto', 'idproveedor', 'idinsumo'];

    public $timestamps = false;

    public function categories()
    {                
        return $this->belongsTo('App\Categoria', 'idcategoria');    
    }

    //NUEVA OPERACION
    public function proveedores()
    {                
        return $this->belongsTo('App\Proveedor', 'idproveedor');    
    }

    public function scopeFiltradoPorProveedores($query, $id)
    {
        if(trim($id) != ""){
            return $query->where('idproveedor', 'LIKE', $id)->get();
        }
    }
    //FIN OPERACION

    public function projects()
    {                
        return $this->belongsTo('App\Proyecto', 'idproyecto');
    }

    public function scopeFiltrateByCategory($query, $id)
    {
        if(trim($id) != ""){
            return $query->where('idcategoria', 'LIKE', $id)->get();
        }
    }

    public function scopeFiltrateByProject($query, $id)
    {
        if(trim($id) != ""){
            return $query->where('idproyecto', '=', $id)->get();
        }
    }

    public function scopeFiltrateBySupplies($query, $id)
    {
        if(trim($id) != ""){
            return $query->where('idinsumo', '=', $id)->get();
        }
    }

    public function scopeFiltrateByNameSupplies($query, $nombre)
    {
        if($nombre){
            return $query->where('nombre', 'LIKE', "%$nombre%");
        }
    }
}
