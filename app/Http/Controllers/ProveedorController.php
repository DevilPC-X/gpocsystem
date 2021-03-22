<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $values = Proveedor::all();
        return view('admin.proveedores.index', compact('values'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre = Proveedor::where('nombre', '=', $request->nombre);

        if($nombre = $request->nombre){
            Alert::warning('El dato ingresado ya existe', 'Advertencia');
        }else{
            Proveedor::create([
            'nombre'=>$request->nombre
            ]);
            Alert::success($request->nombre.' Se Agrego Correctamente');
        }
        
        return redirect()->route('proveedores.index');
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
        $value = Proveedor::find($id);
        return view('admin.proveedores.update', compact('value'));
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
        $idproveedor = Proveedor::find($id);
        $idproveedor->update($request->all());
        Alert::success('Proveedor Actualizado Correctamente', 'Actualizado');
        return redirect()->route('proveedores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proveedor::find($id)->destroy($id);
        Alert::success('Proveedor Eliminado Exitosamente', 'Eliminado');
        return redirect()->route('proveedores.index');
    }
}
