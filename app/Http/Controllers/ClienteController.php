<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.form-clients');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idactividad = \Session::get('idactividad');

        Cliente::create([
            'nombre'=>$request->nombre,
            'rfc'=>$request->rfc,
            'direccion'=>$request->direccion,            
            'idproyecto'=>\Session::get('idproyecto')
        ]);

        $totalMateriales = 0;
        $totalMano = 0;
        $totalMaquina = 0;
        $totalPresupuesto = 0;

        $values1 = \DB::select('SELECT actividades.descripcion, actividades.largo, actividades.alto, actividades.ancho, actividades.tiempo,
        orden_items.nombre, insumos.unidad, orden_items.precio_unitario, orden_items.cantidad, orden_items.subtotal,
        insumos.idinsumo FROM proyectos INNER JOIN actividades ON proyectos.id = actividades.idproyecto
        INNER JOIN orden_items ON orden_items.idactividad = actividades.id INNER JOIN insumos ON
        insumos.id = orden_items.idinsumo WHERE actividades.id = '. $idactividad.' AND orden_items.idinsumo = 1');

        foreach ($values1 as $value) {
            $totalMateriales += $value->subtotal;
        }

        $values2 = \DB::select('SELECT actividades.descripcion, actividades.largo, actividades.alto, actividades.ancho, actividades.tiempo,
        orden_items.nombre, insumos.unidad, orden_items.precio_unitario, orden_items.cantidad, orden_items.subtotal,
        insumos.idinsumo FROM proyectos INNER JOIN actividades ON proyectos.id = actividades.idproyecto
        INNER JOIN orden_items ON orden_items.idactividad = actividades.id INNER JOIN insumos ON
        insumos.id = orden_items.idinsumo WHERE actividades.id = '. $idactividad.' AND orden_items.idinsumo = 2');

        foreach ($values2 as $value) {            
            $totalMano += $value->subtotal;            
        }

        //$value['subtotal'];

        $values3 = \DB::select('SELECT actividades.descripcion, actividades.largo, actividades.alto, actividades.ancho, actividades.tiempo,
        orden_items.nombre, insumos.unidad, orden_items.precio_unitario, orden_items.cantidad, orden_items.subtotal,
        insumos.idinsumo FROM proyectos INNER JOIN actividades ON proyectos.id = actividades.idproyecto
        INNER JOIN orden_items ON orden_items.idactividad = actividades.id INNER JOIN insumos ON
        insumos.id = orden_items.idinsumo WHERE actividades.id = '. $idactividad.' AND orden_items.idinsumo = 3');

        foreach ($values3 as $value) {
            $totalMaquina += $value->subtotal;
        }

        $totalPresupuesto = $totalMateriales + $totalMano + $totalMaquina;

        $actividad['descripcion'] = $values2[0]->descripcion;
        $actividad['largo'] = $values2[0]->largo;
        $actividad['alto'] = $values2[0]->alto;
        $actividad['ancho'] = $values2[0]->ancho;
        $actividad['tiempo'] = $values2[0]->tiempo;
        $cliente = $request->nombre;       

        $view = \View::make('user.pdf-file', compact('values1', 'values2', 'values3', 'actividad', 'cliente', 'totalMateriales', 'totalMano', 'totalMaquina', 'totalPresupuesto'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view)->setPaper('letter', 'vertical');

        \Session::forget('insumo');
        \Session::forget('idactividad');
        \Session::forget('idproyecto');

        return $pdf->stream();        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
