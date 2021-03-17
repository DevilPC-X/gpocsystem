<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Insumo;
use App\Actividad;
use App\OrdenItem;

class AddController extends Controller
{    
    public function __construct()
    {
        if(!\Session::has('insumo')) \Session::put('insumo', array());        
        $this->middleware('auth');        
    }        
    
    public function show()
    {        
        $insumo = \Session::get('insumo');
        $total = $this->total();
        return view('user.list-supplies', compact('insumo', 'total'));    
    }
    
    public function add(Insumo $producto)
    {
        $insumo = \Session::get('insumo');
        $producto->cantidad=1;
        $insumo[$producto->id]=$producto;
        \Session::put('insumo', $insumo);
        
        return redirect()->route('insumo');
    }
    
    public function remove(Insumo $producto)
    {
        $insumo=\Session::get('insumo');
        $indice=$producto->id;
        unset($insumo[$indice]);
        \Session::put('insumo', $insumo);
        \Session::get('insumo');
        return redirect()->route('insumo');
    }
    
    public function removeAll()
    {
        \Session::forget('insumo');
        return redirect()->route('insumo');
    }
    
    public function update(Insumo $producto, $cantidad)
    {
        $insumo=\Session::get('insumo');
        $insumo[$producto->id]->cantidad = $cantidad;
        \Session::put('insumo', $insumo);
        
        return redirect()->route('insumo');
    }
    
    private function total()
    {
        $insumo = \Session::get('insumo');
        $total = 0;
        
        foreach($insumo as $item){
            if ($item->idinsumo == 2) {
                $total += $item->precio_unitario * $item->cantidad * 8;
            }else{
                $total += $item->precio_unitario * $item->cantidad;
            }
        }   
                
        return $total;
    }

    public function generateReport()
    {                
        $this->saveOrder(\Session::get('insumo'));
        return view('user.form-clients');
    }
    
    public function saveOrder($carrito)
    {                    
        $idactividad = \Session::get('idactividad');     

        $total = 0;

        foreach($carrito as $item){
            //NUEVA OPERACION
            if ($item['idinsumo'] == 2) {
                $total += $item['precio_unitario'] * $item['cantidad'] * 8;
                $this->saveOrderItem($item, $idactividad);
            }else{           
                //OPERACION EXISTENTE         
                $total += $item['precio_unitario'] * $item['cantidad'];
                $this->saveOrderItem($item, $idactividad);
            }
            //FIN OPERACION NUEVA
        }
        
    }

    private function saveOrderItem($item, $idactividad)
    {       
        //NUEVA OPERACION
        if ($item['idinsumo'] == 2) {
            OrdenItem::create([
                'idinsumo'=>$item->idinsumo,
                'nombre'=> $item->nombre,
                'precio_unitario'=>$item->precio_unitario,
                'cantidad'=>$item->cantidad,
                'subtotal'=>$item['precio_unitario'] * $item['cantidad'] * 8,
                'idactividad'=> $idactividad,
                'idusuario'=>Auth::user()->id
            ]);
        }else{
            //OPERACION EXISTENTE                  
            OrdenItem::create([
                'idinsumo'=>$item->idinsumo,
                'nombre'=> $item->nombre,
                'precio_unitario'=>$item->precio_unitario,
                'cantidad'=>$item->cantidad,
                'subtotal'=>$item['precio_unitario'] * $item['cantidad'],
                'idactividad'=> $idactividad,
                'idusuario'=>Auth::user()->id
            ]);
        }
                 
    }

    public function showList()
    {
        $insumo = \Session::get('insumo');
        $total = $this->total();
        return view('user.list-supplies', compact('insumo', 'total'));
    }

    public function mostrar()
    {
        $id_proyecto = \Session::get('idproyecto');
        $values = Insumo::orderBy('id', 'ASC')->filtrateByProject($id_proyecto);
        return view('user.index', compact('values', 'id_proyecto'));
    }
}
