<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Kreait\Firebase\Factory;
use Kreait\Firebase;
use App\Insumo;
use App\Categoria;
use Alert;

class InsumoController extends Controller
{
    public function __construct()
    {
        if(!\Session::has('insumo-add')) \Session::put('insumo-add', array());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $values = Insumo::orderBy('id', 'ASC')->filtradoPorProveedores($request->idproyecto)->paginate(7);
        return view('admin.insumos.index', compact('values'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {                    
        return view('admin.insumos.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {               
        Insumo::create([
            'nombre'=>$request->nombre,            
            'unidad'=>$request->unidad,
            'precio_unitario'=>$request->precio_unitario,
            'idcategoria'=>$request->idcategoria,
            'idproyecto'=>$request->idproyecto,
            'idproveedor'=>$request->idproveedor, 
            'idinsumo'=>$request->idinsumo
        ]);        
        Alert::success('Insumo '.$request->nombre.' Registrado', 'Exitoso');
        return redirect()->route('insumos.index');
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
        $value = Insumo::find($id);
        return view('admin.insumos.update', compact('value'));
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
        $idsupplie = Insumo::find($id);
        $idsupplie->update($request->all());
        Alert::success('Insumo Actualizado Correctamente', 'Actualizado');
        return redirect()->route('insumos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {                
        Insumo::find($id)->destroy($id);
        Alert::success('Insumo Eliminado Correctamente', 'Eliminado');
        return redirect()->route('insumos.index');
    }
   
    public function getConnection()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/fir-486a0-firebase-adminsdk-fino8-dfd3765f85.json');
        $firebase = (new Factory)->withServiceAccount($serviceAccount)->withDatabaseUri('https://fir-486a0.firebaseio.com/')->create();
        $database = $firebase->getDatabase();
        return $database;
    }
}
